<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academic";

// Keep pre-PHP 8.1 mysqli behaviour (return false instead of throwing exceptions)
mysqli_report(MYSQLI_REPORT_OFF);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>