<?php
session_start();
include('logindb.php');
if(isset($_SESSION['retrieve'])){
    header("Location:$_SESSION[retrive]");
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST["name"];
    $pass=$_POST["pass"];
    $_SESSION['usname']=$user;
    $sql= "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $result=$conn->query($sql);
    $count=$result->num_rows;

    if($count==1){

        $query="SELECT Role FROM user WHERE Role='super_admin' AND username='$user'";
        $super = $conn->query($query);
        $count1=$super->num_rows;


        if ($count1==1) {
            header("Location:superadmin.php");
        }
        else {
            $query="SELECT Role FROM user WHERE Role='admin' AND username='$user'";
            $super = $conn->query($query);
            $count1=$super->num_rows;
            if($count1==1){
                header("Location:admin.php");
            }
            else{
                header("Location:login2.php");
            }
            // header("Location:login2.php");
        }
    }
    else{
        echo "failed enter a valid user ";
    }
} 
?>
<html>
<link rel="stylesheet" href="login.css">
    <body class="outer">
    <div class="container">
        <form action=""  method="POST">
            <div class="username">
                <label>Username:</label>
                <input class="input" type="text" name="name" placeholder="Name"><br><br>
            </div>
            
                <lable>Password:</label>
                <input class="input" type="password" name="pass" placeholder="Password"><br><br>
            
            <input type="submit" class="submitbtn">
        

        </form>
        <button class="submitbtn" onclick="window.open('register.php')">Register</button>
    </div>
    </body>
</html>
