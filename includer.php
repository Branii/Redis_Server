<?php 

spl_autoload_register(function ($class){
    $dirs = ['app','app/core', 'app/apis', 'app/apis/5d', 'app/config','app/model','app/providers','public', 'vendor'];
    foreach ($dirs as $dir) {
        $filename = $dir . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($filename)) {
            include $filename;
            return;
        }
    }
});