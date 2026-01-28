<?php
    $config = require 'config.php';
    $db = new Database($config);

    $heading = "My Note";
    $currentUserId = 1;

    $note = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);
    
    require BASE_PATH . '/view/note.view.php'; 
    
?>