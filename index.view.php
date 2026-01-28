<?php 
    define('BASE_PATH', __DIR__);
    define('BASE_URL', '/website');
    
    require BASE_PATH . '/functions.php';
    require BASE_PATH . '/database.php';
    require BASE_PATH . '/Response.php';
    require BASE_PATH . '/router.php';
    
    $config = require BASE_PATH . '/config.php';
    //connect to mysql database 
    
    $db = new Database($config);
    $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
   
    
    // foreach($posts as $post){
    //     echo "<li>" . $post['title'] ."</li>";
    // }


?>


