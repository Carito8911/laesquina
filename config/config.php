<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('USER', 'root');
define('PASSWORD', '12345678');
define('HOST', 'localhost');
define('DATABASE', 'senasoft');

try {
    $connection = new PDO(
        'mysql:host=' . HOST . ';dbname=' . DATABASE,
        USER,
        PASSWORD
    );
} catch (PDOException $e) {
    exit('Error: ' . $e->getMessage());
}
?>
