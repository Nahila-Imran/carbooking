<?php
$siteurl = "http://localhost/training/carBooking/";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "carbook";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>