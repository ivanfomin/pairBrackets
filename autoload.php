<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . 'autoload.php/' . str_replace('\\', '/', $class) . '.php';
   // var_dump($path); die;
    require $path;
});