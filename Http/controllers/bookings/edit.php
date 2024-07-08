<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$locations = $db->query('select * from locations ')->get();
$categories = $db->query('select * from categories ')->get();
$tour_location = $db->query("select location_id from tour_locations where tour_id = {$_GET['id']} ")->find()['location_id'];
$tour_categories = $db->query("select category_id from tour_categories where tour_id = {$_GET['id']} ")->get();
$tour = $db->query('select * from bookings where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


view("bookings/edit.view.php", [
    'heading' => 'Edit tour',
    'locations' => $locations,
    'categories' => $categories,
    'tour' => $tour,
    'tour_location' => $tour_location,
    'tour_categories' => $tour_categories,
    'errors' => []
]);