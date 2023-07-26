<?php
session_start();
include('logindb.php');
$id=$_GET['id'];

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $role=$_POST["update"];
    $query="UPDATE user SET Role='$role' WHERE id='$id'";
    $conn->query($query);
    header("Location:superadmin.php");
}

?>
<html>
<link rel="stylesheet" href="login2.css">
<body>
<form action="" method="POST">
    <label>Choose an option to update<label><br>
    <input type="radio" id="hp" value="user" name="update">
    <label>User</label><br>
    <input type="radio" id="php"  value="admin" name="update">
    <label>Admin</label><br>
    <input type="submit" value="submit" class="submitbtn">
</form>

</body>
</html>