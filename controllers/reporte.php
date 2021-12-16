<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './config/config.php';

$query = $connection->prepare('SELECT * FROM archivos');

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
