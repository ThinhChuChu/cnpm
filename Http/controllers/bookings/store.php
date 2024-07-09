<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];
// dd($_POST['num_of_people']);
$user_id = $db->query("select id from users where email = '{$_SESSION['user']['email']}'")->find()["id"];
$db->query('INSERT INTO bookings(tour_id, user_id, num_of_people) VALUES(:tour_id, :user_id,:num_of_people)', [
    'tour_id' => $_POST['tour_id'],
    'user_id' => $user_id ,
    'num_of_people' => $_POST['num_of_people'],
 
]);
header('location: /bookings');
die();
