<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(\Core\Database::class);

$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A text is required and text must be less than 1,000 characters!';
}

if (! empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create a new note',
        'errors' => $errors
    ]);
} else {
    $db->query('insert into posts(title, user_id) VALUES(:title, :user_id)', [
        'title' => $_POST['title'],
        'user_id' => 1
    ]);

    header('location: /notes');
    exit();
}
