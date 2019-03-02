<?php
    // Load config
    require_once 'config/config.php';
    
    // Load libraries
    /*
    require_once 'libraries/controller.php';
    require_once 'libraries/core.php';
    require_once 'libraries/database.php';
    */

    // Autoload Core Librares
    spl_autoload_register(function($classname) {
        require_once 'libraries/'.$classname.'.php';
    });
    

?>