<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 222221;

// find the corresponding tour
$tour = $db->query('select * from tours where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize that the current user can edit the tour
authorize($tour['user_id'] === $currentUserId);

// validate the form
$errors = [];

if (! Validator::string($_POST['body'], 1, 10)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// if no validation errors, update the record in the tours database table.
if (count($errors)) {
    return view('tours/edit.view.php', [
        'heading' => 'Edit tour',
        'errors' => $errors,
        'tour' => $tour
    ]);
}

$db->query('update tours set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// redirect the user
header('location: /tours');
die();
