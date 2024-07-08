<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

var_dump($_POST['id']);
$tour = $db->query('select * from bookings where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$db->query('delete from bookings where id = :id', [
    'id' => $_POST['id']
]);

redirect('/bookings');
