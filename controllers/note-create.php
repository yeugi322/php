<?php
$heading = 'Create a new note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    dd($_POST);
}

require BASE_PATH . '/view/note-create.view.php'; 