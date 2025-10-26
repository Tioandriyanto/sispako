<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "sispako";

// Create connection
$koneksi = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>