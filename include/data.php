<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "entry";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
