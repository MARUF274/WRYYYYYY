<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = '127.0.0.1';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

$connection = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>