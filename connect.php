<?php
// db.php - Simple DB connection (can also be placed in a separate file)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "silentum_db";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>