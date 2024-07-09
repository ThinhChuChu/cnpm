<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$query = 'SELECT tours.*, locations.name as location from tours  inner join tour_locations on tours.id = tour_locations.tour_id inner join locations on locations.id = tour_locations.location_id where tours.id = :id';

$tour = $db->query($query, [
    'id' => $_GET['id']
])->findOrFail();


view("tours/show.view.php", [
    'heading' => 'tour',
    'tour' => $tour
]);
