<?php
define('DATABASE_NAME', 'login');
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');

try {
    $GLOBALS['database']= new PDO("mysql:host=".DATABASE_HOST.";dbname=".DATABASE_NAME, DATABASE_USER , DATABASE_PASSWORD);

} catch (PDOException $e) {
    
    die("DB Error : " . $e->getMessage());
}

session_start();
// print_r($_SESSION);
