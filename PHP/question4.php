<?php
session_start();
$_SESSION['retrieve']='question4.php';
if($_SESSION['usname']){
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $qs4=$_POST["question4"];
        $_SESSION['question4']=$qs4;
        $correct4="both a and c";
        if($_SESSION['question4']===$correct4){
            $_SESSION['mark']+=1;
        }
        if(isset($qs4)){
          
            header("Location:result.php");
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
            <label>4. Which of the following is used to display the output in PHP?</label><br>
                <input type="radio" id="echo" value="echo" name="question4">
                <label>echo</label><br>
                <input type="radio" id="write"  value="write" name="question4">
                <label>write</label><br>
                <input type="radio" id="print"  value="print" name="question4">
                <label>print</label><br>
                <input type="radio" id="ac"  value="both a and c" name="question4">
                <label>both a and c</label><br>
                <input type="submit" value="submit" class="submitbtn">
        </form>
       
</body>
</html>