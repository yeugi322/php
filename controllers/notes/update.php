<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(\Core\Database::class);


$currentUserId = 1;

$note = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
    ])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A text is required and text must be less than 1,000 characters!';
}

if(count($errors)){
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update posts set title = :title where id = :id', [
    'id' => $_POST['id'],
    'title' => $_POST['title']
]);

header('location: /notes');
die();