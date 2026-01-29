<?php
    $config = require base_path('config.php');
    $db = new Database($config);
    
    $notes = $db->query("select * from posts")->findAll();


     view('notes/index.view.php', [
        'heading' => 'My Notes',
        'notes' => $notes
    ]) ; 
    
?>