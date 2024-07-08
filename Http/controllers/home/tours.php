<?php
use Core\Session;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$tours = $db->query('select * from tours ')->get();
$categories = $db->query('select * from categories ')->get();
view('home_page/tours.view.php', [
    'errors' => Session::get('errors'),
    'tours' => $tours,
    'categories' => $categories,
    'db' => $db,
]);
