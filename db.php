<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "zxczxc123";
$dbname = "toko_kue";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    http_response_code(500);
    die("Gagal koneksi ke database");
}
