<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$categories = $db->query('select * from categories')->get();

view("categories/index.view.php", [
    'heading' => 'Thể loại',
    'categories' => $categories
]);