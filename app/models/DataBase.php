<?php
require_once 'models/env.php';

$host ='localhost';
$username = 'root';
$password = '';
$database ='pweb_database';

$conn = new mysqli($host, $username, $password, $database);
if(!$conn){
    die("Could not connect to: " . $conn->connect_error);
}