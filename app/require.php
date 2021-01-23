<?php
   spl_autoload_register(function($class){
    (__FILE__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR , strtolower($class)) . '.php';
   });
    // require_once 'config/config.php'
    //  $require_once = 'database/database.php';
    // require_once 'core/core.php';
    $db = new Database();
    $core = new Core();

