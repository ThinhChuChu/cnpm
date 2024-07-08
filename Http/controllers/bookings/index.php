<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$bookings = $db->query('select * from bookings ')->get();

view("bookings/index.view.php", [
    'heading' => 'My bookings',
    'bookings' => $bookings
]);