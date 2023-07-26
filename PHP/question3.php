<?php
session_start();
$_SESSION['retrieve']='question3.php';
if($_SESSION['usname']){
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $qs3=$_POST["question3"];
        $_SESSION['question3']=$qs3;
        $correct3="dot";
        if($_SESSION['question3']===$correct3){
            $_SESSION['mark']+=1;
        }
        if(isset($qs3)){
          
            header("Location:question4.php");
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
    <body>
    <link rel="stylesheet" href="login2.css">
        <form action="" method="POST">
            <label>3. Which of the following is used for concatenation in PHP?</label><br>
                <input type="radio" id="plus" value="plus" name="question3">
                <label>+</label><br>
                <input type="radio" id="star"  value="star" name="question3">
                <label>*</label><br>
                <input type="radio" id="dot"  value="dot" name="question3">
                <label>.</label><br>
                <input type="radio" id="appent"  value="append" name="question3">
                <label>()</label><br>
                <input type="submit" value="next" class="submitbtn">
        </form>
   
</body>
</html>