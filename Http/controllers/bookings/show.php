<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$tour = $db->query('select * from bookings where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


view("bookings/show.view.php", [
    'heading' => 'tour',
    'tour' => $tour
]);
