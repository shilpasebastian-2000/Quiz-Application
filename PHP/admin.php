<html>
<link rel="stylesheet" href="login2.css">
<body>
<?php
session_start();
$_SESSION['update']='admin.php';
include('logindb.php');
$sql = "SELECT * FROM Result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo 
  "<table border>
  <tr>
  <th>Name</th>
  <th>Mark</th>
  <th>Date</th>
  <th>Delete</th></tr>";
  while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row["name"]."</td><td>".$row["mark"]."</td><td>".$row["date"]."</td><td><a href='deleteinfo.php?id=".$row['id']."'>Delete</a></td></tr>";
}
  echo "</table>";
} else {
  echo "0 results";
}
?>
</body>
</html>