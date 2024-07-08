<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$Auth = new Authenticator();
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    $errors['existed'] = 'Email existed.';
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
} else {
    $db->query('INSERT INTO users(email, password,full_name,phone_number,address) VALUES(:email, :password,:full_name,:phone_number,:address)', [
        'email' => $email,
        'password' => $password,
        'full_name' => $_POST['full_name'],
        'phone_number' => $_POST['phone_number'],
        'address' => $_POST['address'],
        //'password' => password_harsh($_POST['password'], PASSWORD_BCRYPT)
    ]);
    $user = $db->query('select * from users where email = :email', [
        'email' => $email
    ])->find(); 
    $Auth->login($user);

    redirect('/');
}
