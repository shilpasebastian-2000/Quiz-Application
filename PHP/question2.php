<?php
session_start();
$_SESSION['retrieve']='question2.php';
if($_SESSION['usname']){
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $qs2=$_POST["question2"];
        $_SESSION['question2']=$qs2;
        $correct2="dollar";
        if($_SESSION['question2']===$correct2){
            $_SESSION['mark']+=1;
        }
        if(isset($qs2)){
         
            header("Location:question3.php");
        }
        else{
            echo"Choose an option";
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
        <form action="" method="POST">
            
            <label>2. Variable name in PHP starts with ?</label><br>
                <input type="radio" id="exc" value="exclamation" name="question2">
                <label>!</label><br>
                <input type="radio" id="dollar"  value="dollar" name="question2">
                <label>$</label><br>
                <input type="radio" id="amb"  value="ambersant" name="question2">
                <label>&</label><br>
                <input type="radio" id="hash"  value="hash" name="question2">
                <label>#</label><br>
                <input type="submit" value="next" class="submitbtn">
        </form>
     
</body>
</html>