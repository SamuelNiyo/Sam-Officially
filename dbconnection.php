<?php
$servername = "localhost"; 
$username = "sam"; 
$password = "222008677"; 
$dbname = "revenuesystem";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);
?>