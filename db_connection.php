<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'it_department';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>