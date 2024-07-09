<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("tours/create.view.php", [
        'heading' => 'Create tour',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO tours(name, description, price, duration, start_date,thumb) VALUES(:name, :description,:price, :duration, :start_date,:thumb)', [
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => $_POST['price'],                                         
    'duration' => $_POST['duration'],
    'start_date' => $_POST['start_date'],
    'thumb' => $_FILES['thumb']['name'],
]);

move_uploaded_file($_FILES['thumb']["tmp_name"],"img/".$_FILES["thumb"]["name"]);

$name = $_POST['name'];
$tour_id = $db->query("SELECT id from tours where name = '$name'")->find()["id"];
$db->query('INSERT INTO tour_locations(tour_id, location_id) VALUES(:tour_id, :location_id)',[
    'tour_id' => $tour_id,
    'location_id' => $_POST['location_id']
]);
foreach ($_POST['categories'] as $category) {
    $db->query('INSERT INTO tour_categories(tour_id, category_id) VALUES(:tour_id, :category_id)',[
        'tour_id' => $tour_id,
        'category_id' => $category
    ]);
}
header('location: /tours');
die();
