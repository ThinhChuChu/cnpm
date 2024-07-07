<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);
$locations = $db->query('select * from locations ')->get();
$categories = $db->query('select * from categories ')->get();

view("tours/create.view.php", [
    'heading' => 'Create tour',
    'locations' => $locations,
    'categories' => $categories,
    'errors' => []
]);