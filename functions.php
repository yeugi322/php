<?php
    use Core\Response;
    
    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }

    function urlIs($path)
    {
        $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // strip /website/public if needed (XAMPP subfolder)
        $current = str_replace('/website/public', '', $current);

        if ($current === '') {
            $current = '/';
        }

        return $current === $path;
    }

    function authorize($condition, $status = Response::FORBIDDEN){
        if(! $condition){
            abort($status);
        }
    }

    function base_path($path){
        return BASE_PATH . $path;
    }

    function view($path, $attributes = []){
        extract($attributes);
        require base_path('view/' . $path);
    }

    function url($path = '') {
        return '/website/public' . $path;
    }
?>