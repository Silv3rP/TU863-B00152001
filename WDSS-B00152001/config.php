<?php
require_once '../src/DBconnect.php';
/**
 * Configuration for database connection
 *
 */
$host = "localhost";

$username = "root";
$password = '';
$dbname = "test"; // will use later
$port = "3307";
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4"; // will use later
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

];


?>
 