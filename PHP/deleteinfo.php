<?php
session_start();
include('logindb.php');
$id=$_GET['id'];
$query="DELETE FROM Result WHERE id='$id'";
$conn->query($query);
header("Location:$_SESSION[update]");
?>