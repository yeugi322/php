<?php
    $config = require 'config.php';
    $db = new Database($config);

    $heading = "My Note";
    
    $note = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->find();

    if(! $note){
        abort();
    }

    if($note['user_id'] !== 1){
        abort(Response::FORBIDDEN);
    }

    require BASE_PATH . '/view/note.view.php'; 
    
?>