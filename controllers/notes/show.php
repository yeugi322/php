<?php
    use Core\Database;
    
    $config = require base_path('config.php');
    $db = new Database($config);

    $currentUserId = 1;

        $note = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->findOrFail();

        authorize($note['user_id'] === $currentUserId);
        
        
        view('notes/show.view.php', [
            'heading' => 'My Note',
            'note' => $note
        ]); 