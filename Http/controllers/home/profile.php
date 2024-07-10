<?php
use Core\Session;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$user = $db->query('select * from users where email = :email', [
    'email' => $_SESSION['user']['email']
]
)->find();
$query = "select bookings.id,tours.name ,tours.start_date, locations.name as location, bookings.status
from tours inner join tour_locations on tours.id = tour_locations.tour_id inner join locations on tour_locations.location_id = locations.id inner join bookings on bookings.tour_id = tours.id inner join users on bookings.user_id = users.id where users.email = '{$_SESSION['user']['email']}'";
$booked_tours = $db->query($query)->get();
view('home_page/profile.view.php', [
    'errors' => Session::get('errors'),
    'user' => $user,
    'booked_tours' =>  $booked_tours
]);
