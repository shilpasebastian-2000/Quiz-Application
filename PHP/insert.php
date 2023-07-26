<?php
session_start();
include('logindb.php');
        $currentdate=(date("Y/m/d"));
        $resultuname=$_SESSION['usname'];
        $resultname=$_SESSION['name'];
        $resultmark=$_SESSION['mark'];
        $insert="INSERT INTO Result (username,name,mark,date) VALUES ('$resultuname','$resultname','$resultmark','$currentdate')";
        $conn->query($insert);
        session_destroy();

?>
<html>
<link rel="stylesheet" href="login2.css">
    <body>
    Your mark has been entered successfully!
    <button class="submitbtn" onclick="window.location.href=('login.php')">Login</button>
    </body>
</html>
