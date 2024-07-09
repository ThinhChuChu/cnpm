<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];


$db->query('update bookings set tour_id = :tour_id ,user_id = :user_id, num_of_people = :num_of_people, status = :status where id = :id ', [
    'id' => $_POST['id'],
    'tour_id'=> $_POST['tour_id'],
    'user_id'=> $_POST['user_id'],
    'num_of_people'=> $_POST['num_of_people'],
    'status'=> $_POST['status'],
]);
// redirect the user
redirect('/bookings');
