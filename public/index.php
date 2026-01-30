<?php 
    const BASE_PATH = __DIR__ . '/../';
    
    
    require BASE_PATH . 'functions.php';
    
    spl_autoload_register(function ($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require base_path("{$class}.php");
    });

   $router = new \Core\Router();
    
   $routes = require base_path('routes.php');
   $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
   $uri = str_replace('/website/public', '', $uri);
   $uri = rtrim($uri, '/');
   if ($uri === '') {
    $uri = '/';
    }

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    $router->route($uri, $method);
   
    


?>


