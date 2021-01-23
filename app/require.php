<?php
   spl_autoload_register(function($className){
      include dirname(__FILE__) . '/' . str_replace('\\', '/' , strtolower($className)) . '.php';
   });
   // require_once 'config/config.php';
   // require_once 'core/core.php';
   // require_once 'database/database.php';
   $db = new database();
   $core = new core();

