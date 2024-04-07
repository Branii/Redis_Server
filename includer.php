<?php 

spl_autoload_register(function ($class){
    $dirs = ['app', 'public', 'vendor'];
    foreach ($dirs as $dir) {
        $filename = $dir . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($filename)) {
            include $filename;
            return;
        }
    }
});