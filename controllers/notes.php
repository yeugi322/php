<?php
    $config = require 'config.php';
    $db = new Database($config);

    $heading = "My Notes";
    
    $notes = $db->query("select * from posts")->findAll();

    

    require BASE_PATH . '/view/notes.view.php'; 
    
?>