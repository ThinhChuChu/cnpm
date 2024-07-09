<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$bookings = [];
if (isset($_SESSION['cart'])) {
foreach ($_SESSION['cart'] as $tour_id) {
    $booking = $db->query("select * from tours where id = $tour_id")->findOrFail();
    $bookings[] = $booking; 
    }
}

view("cart/index.view.php", [
    'heading' => 'My cart',
    'bookings' => $bookings
]);