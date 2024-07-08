<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];


$db->query('update users set password = :password ,email = :email, full_name = :full_name, phone_number = :phone_number, address = :address where id = :id ', [
    'id' => $_POST['id'],
    'password' => $_POST['password'],
    'email' =>  $_POST['email'],
    'full_name' => $_POST['full_name'],
    'phone_number' => $_POST['phone_number'],
    'address'=> $_POST['address'],
]);

// redirect the user
redirect("/profile?email={$_SESSION['user']['email']}");
