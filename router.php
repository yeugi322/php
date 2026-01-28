<?php 
    $routes = require 'routes.php';

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $uri = rtrim($uri, '/');

    

    
    function routeToController($uri, $routes){
        if (array_key_exists($uri, $routes)) {
            require BASE_PATH . '/' . $routes[$uri];
            } else {
                abort();
        }

    }

    function abort($code = 404){
        http_response_code($code);

        require BASE_PATH . "/view/{$code}.php";

        die();
    }

    routeToController($uri, $routes);
?>
