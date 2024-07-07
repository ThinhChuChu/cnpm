<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("tours/create.view.php", [
        'heading' => 'Create tour',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO tours(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location: /tours');
die();
