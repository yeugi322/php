<?php

    define('BASE_URL', '/website');
    function urlIs($value){
        return $_SERVER["REQUEST_URI"] === $value;
    }

?>