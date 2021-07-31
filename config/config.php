<?php

    session_start();

    error_reporting(-1);
    
    ini_set("display_errors", 1);

    spl_autoload_register(function ($class) {
        include './lib/' . $class . '.class.php';
    });

    define("DBHOST", "localhost");
    define("DBDATABASE", "blogg");
    define("DBUSER", "root");
    define("DBPASS", "");