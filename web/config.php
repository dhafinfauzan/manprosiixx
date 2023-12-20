<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'userlogin';
$port = 3306; // or the port you are using

// Create a connection
$conection_db = mysqli_connect($host, $user, $password, $database, $port);

// Check connection
if (!$conection_db) {
    die("Connection failed: " . mysqli_connect_error());
}
 