<?php
$servername = "localhost";
$username = "root";
$password = "Magento321*";
$dbname="myproject";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "Connected successfully";
// }
?>