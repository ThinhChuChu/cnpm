<?php
use Core\Session;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$tour = $db->query('select * from tours where id = :id', [
    'id' => $_GET['id']
]
)->find();
view('home_page/tour.view.php', [
    'errors' => Session::get('errors'),
    'tour' => $tour
]);
