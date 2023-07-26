<?php
session_start();
include('logindb.php');
$_SESSION['retrieve']='login2.php';
if($_SESSION['usname']){
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $qs1=$_POST["question1"];
        $_SESSION['question1']=$qs1;
        $correct1="Hypertext Preprocessor";
        if($_SESSION['question1']===$correct1){
            $_SESSION['mark']=1;
        }
        if(isset($qs1)){
            header("Location:question2.php");
        }
        else{
            echo "Choose an option";
        }
    
    }
}
else{
    header("Location:login.php");
}

?>

<html>
<link rel="stylesheet" href="login2.css">
    <body>
    <?php
 
        $_SESSION['usname']='usernm';
        $sql = "SELECT * FROM user WHERE username='usernm'";
        $result = $conn->query($sql);
        while($user= $result->fetch_assoc()){
            echo "Hi" . $user['name'] ."<br>" ."Kindly answer the following questions";  
        }
         
    ?>
        <form action="" method="POST">
 
            <label>1. PHP stands for ?</label><br>
                <input type="radio" id="hp" value="Hypertext Preprocessor" name="question1">
                <label>Hypertext Preprocessor</label><br>
                <input type="radio" id="php"  value="Pretext Hypertext Preprocessor" name="question1">
                <label>Pretext Hypertext Preprocessor</label><br>
                <input type="radio" id="personalhp"  value="Personal Home Processor" name="question1">
                <label>Personal Home Processor</label><br>
                <input type="radio" id="none"  value="None of the above" name="question1">
                <label>None of the above</label><br>
                <input class="submitbtn" type="submit" value="next">
        </form>
       

</body>
</html>

