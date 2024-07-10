<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

if (isset($_GET['search_bar'])) {
    $tours = $db->query( "select * from tours where name like '%{$_GET['search_bar']}%'
                                                or  price like '%{$_GET['search_bar']}%'
                                                or  duration like '%{$_GET['search_bar']}%'
                                                or  id like '%{$_GET['search_bar']}%'
                                                or  description like '%{$_GET['search_bar']}%'
                                                ")->get();
} else $tours = $db->query('select * from tours ')->get();

view("tours/index.view.php", [
    'heading' => 'My tours',
    'tours' => $tours
]);