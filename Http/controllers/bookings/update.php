<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];


$db->query('update bookings set name = :name ,price = :price, duration = :duration, start_date = :start_date, description = :description where id = :id ', [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'price' =>  $_POST['price'],
    'duration' => $_POST['duration'],
    'start_date' => $_POST['start_date'],
    'description'=> $_POST['description'],
]);

$db->query('Update tour_locations set location_id = :location_id where tour_id = :tour_id',[
    'tour_id' => $_POST['id'],
    'location_id' => $_POST['location_id']
]);
$db->query("DELETE FROM tour_categories where tour_id = {$_POST['id']}");
foreach ($_POST['categories'] as $category) {

    $db->query('INSERT INTO tour_categories(tour_id, category_id) VALUES(:tour_id, :category_id)',[
        'tour_id' => $_POST['id'],
        'category_id' => $category
    ]);
}



// redirect the user
redirect('/bookings');
