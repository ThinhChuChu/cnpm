<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$users = $db->query('select * from users ')->get();

view("users/index.view.php", [
    'heading' => 'My users',
    'users' => $users
]);