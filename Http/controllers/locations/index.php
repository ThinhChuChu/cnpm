<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$locations = $db->query('select * from locations')->get();

view("locations/index.view.php", [
    'heading' => 'Địa điểm',
    'locations' => $locations
]);