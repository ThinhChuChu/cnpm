<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;


// var_dump($_POST['email']);
// var_dump($_POST['password']);
// exit();
$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);
// form = Login form 

$signedIn = (new Authenticator)->attempt(
    $attributes['email'], $attributes['password']
);
// form valid -> attempt ? throw error
if (!$signedIn) {
    $form->error(
        'email', 'No matching account found for that email address and password.'
    )->throw();
}


redirect('/');