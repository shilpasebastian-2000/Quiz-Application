<?php
session_start();
include('logindb.php');
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $_SESSION['name']=$name;
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    $date=$_POST['date'];
    $checkuser="SELECT * FROM user WHERE username='$user'";
    $result=$conn->query($checkuser);
    $count=$result->num_rows;
    if($count==1){
        echo "Sorry ,this username already exists";
    }
    else{
        $query="INSERT INTO user (username,password,name,dateofbirth) VALUES ('$user','$pass','$name','$date')";
        $conn->query($query);
        header("Location:login.php"); 
    }
}
?>
<html>

<link rel="stylesheet" href="register.css">

<!-- <link rel="stylesheet" href="result.css"> -->
    <body>
        <form action="" method="POST">
            Name : <input type="text"  name="name" required><br><br>
            Username: <input type="text"  name="uname" required><br><br>
            Password: <input type="password"  name="pass" required><br><br>
            Date of Birth: <input type="date" name="date" required><br><br>
            <input  type="submit" value="Register" class="submitbtn">
        </form>
    </body>
</html>
