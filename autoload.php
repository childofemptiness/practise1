<?php

spl_autoload_register(function ($className) {

    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $file = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';

    //echo $file . '<br/>';

    if (file_exists($file)) {

        require $file;
    } 
    
    else {

        echo 'Class not found(<br/>';
    }
});
