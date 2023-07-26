<html>
<link rel="stylesheet" href="login2.css">
<body>
<?php
session_start();
$_SESSION['update']='superadmin.php';
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
echo "<br><br>";
$sql2 = "SELECT name,username,Role,id FROM user";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
echo  "<table border>
<tr>
<th>Name</th>
<th>Username</th>
<th>Role</th>
<th>Update Role</th>
</tr>";
while($row2= $result2->fetch_assoc()){
    echo "<tr><td>".$row2["name"]."</td><td>".$row2['username']."</td><td>".$row2["Role"]."</td><td><a href='updateinfo.php?id=".$row2['id']."'>Update</a></td></tr>";
}
}
?>
</body>
</html>
