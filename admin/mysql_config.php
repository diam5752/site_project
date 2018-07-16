<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_gen_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//$sql = "INSERT INTO site_pages (title, text )
//VALUES ('John', 'Doe')";


//$conn->close();
?>