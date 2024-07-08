<?php
use Core\Session;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$user = $db->query('select * from users where email = :email', [
    'email' => $_GET['email']
]
)->find();
view('home_page/profile.view.php', [
    'errors' => Session::get('errors'),
    'user' => $user
]);
