<?php

// Debug mode
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Paths
define( 'DS', DIRECTORY_SEPARATOR );
define( 'ROOT', dirname(__DIR__) );
define( 'INC', ROOT . DS . 'inc' );
define( 'TPL', ROOT . DS . 'tpl' );

// Identifiants MySQL
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cours');
define('DB_PASSWORD', 'passwd');
define('DB_NAME', 'cours');