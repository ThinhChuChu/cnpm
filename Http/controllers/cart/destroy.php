<?php

$idx = array_search($_POST['cancel_id'], $_SESSION['cart']);
unset($_SESSION['cart'][$idx]);
redirect('/cart');