<?php
echo "Directory </br>";
echo "<a href=\"index.html\">Home</a></br>";
echo "<a href=\"info.php\">Show PHP info here</a></br></br></br>";

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>