<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("categories/create.view.php", [
        'heading' => 'Thêm thể loại',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO categories(name) VALUES(:name)', [
    'name' => $_POST['name'],
]);

header('location: /categories');
die();
