<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$tours = $db->query('select * from tours ')->get();

view("tours/index.view.php", [
    'heading' => 'My tours',
    'tours' => $tours
]);