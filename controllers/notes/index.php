<?php
use Core\App;
use Core\Database;

$db = App::resolve(\Core\Database::class);
    
    $notes = $db->query("select * from posts")->findAll();


     view('notes/index.view.php', [
        'heading' => 'My Notes',
        'notes' => $notes
    ]) ; 
    
?>