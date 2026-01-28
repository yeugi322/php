<?php 

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $uri = rtrim($uri, '/');

    $routes = [
    '/website' => 'controllers/home.php',
    '/website/index.view.php' => 'controllers/home.php',
    '/website/home' => 'controllers/home.php',
    '/website/notes' => 'controllers/notes.php',
    '/website/note' => 'controllers/note.php',
    '/website/about' => 'controllers/about.php',
    '/website/contact' => 'controllers/contact.php',
    ];

    
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
