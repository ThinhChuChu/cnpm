<<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['tour_id'])) {
    $tour_id = $_POST['tour_id'];
    // Kiểm tra nếu tour đã tồn tại trong giỏ hàng
    if (!in_array($tour_id,$_SESSION['cart'])) {
        $_SESSION['cart'][] = $tour_id;
    }
}

redirect('/cart');