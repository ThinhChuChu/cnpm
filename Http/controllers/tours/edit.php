<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);



$tour = $db->query('select * from tours where id = :id', [
    'id' => $_GET['id']
])->findOrFail();



view("tours/edit.view.php", [
    'heading' => 'Edit tour',
    'errors' => [],
    'tour' => $tour
]);