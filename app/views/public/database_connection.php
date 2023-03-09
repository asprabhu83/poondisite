  <?php
  
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "academic";

$servername = "localhost";
$username = "admin_sripushpamc";
$password = "7d#yfS47";
$dbname = "admin_sripushpamc";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "admin_sripushpamc";

   $db = mysqli_connect($servername, $username, $password, $dbname);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>