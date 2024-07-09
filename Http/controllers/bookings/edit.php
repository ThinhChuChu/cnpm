<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$locations = $db->query('select * from locations ')->get();
$categories = $db->query('select * from categories ')->get();
// $booking_location = $db->query("select location_id from booking_locations where booking_id = {$_GET['id']} ")->find()['location_id'];
// $booking_categories = $db->query("select category_id from booking_categories where booking_id = {$_GET['id']} ")->get();
$booking = $db->query('select * from bookings where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


view("bookings/edit.view.php", [
    'heading' => 'Edit booking',
    'locations' => $locations,
    'categories' => $categories,
    'booking' => $booking,
    'errors' => []
]);