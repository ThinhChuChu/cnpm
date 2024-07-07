<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$tour = $db->query('select * from tours where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$db->query('delete from tours where id = :id', [
    'id' => $_POST['id']
]);

header('location: /tours');
exit();
