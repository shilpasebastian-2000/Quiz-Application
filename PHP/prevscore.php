<?php
session_start();
include('logindb.php');
?>
<html>
<link rel="stylesheet" href="login2.css">
<body class="table">

<?php
$resultuname=$_SESSION['usname'];
$sql = "SELECT username, name, mark, date FROM Result WHERE username='$resultuname'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

  echo "<table border>
  <tr>
  <th>Username</th>
  <th>Name</th>
  <th>Mark</th>
  <th>Date</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td><td>".$row["name"]."</td><td>".$row["mark"]."</td><td>".$row["date"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
</body>
</html>



