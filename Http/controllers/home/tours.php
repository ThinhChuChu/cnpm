<?php
use Core\Session;
use Core\App;
use Core\Database;
$query = 'SELECT tours.*, locations.name as location from tours  inner join tour_locations on tours.id = tour_locations.tour_id inner join locations on locations.id = tour_locations.location_id';
$db = App::resolve(Database::class);

$categories = $db->query('select * from categories ')->get();

if (isset($_GET['search_bar'])) {
    $tours = $db->query($query ." where tours.name like '%{$_GET['search_bar']}%'")->get();
} else $tours = $db->query($query)->get();

view('home_page/tours.view.php', [
    'errors' => Session::get('errors'),
    'tours' => $tours,
    'categories' => $categories,
    'db' => $db,
]);
