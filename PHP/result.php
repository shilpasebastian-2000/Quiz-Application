<?php
session_start();
// if($_SESSION['usname']){
//     header("Location:result.php");
// }
// else{
//     header("Location:login.php");
// }

?>

<html>
<link rel="stylesheet" href="result.css">
    <body>
        
   <div class="container">
    <?php  

echo "The actual answer for the 1st question is HyperText Preprocessor" . "<br>";
echo "The entered  answer for the 1st question is" . $_SESSION["question1"] ."<br><br>";
echo "The actual answer for the 2nd question is $" . "<br>";
echo "The entered  answer for the 2nd question is " . $_SESSION["question2"] ."<br><br>";
echo "The actual answer for the 3rd question is dot" . "<br>";
echo "The entered  answer for the 1st question is " . $_SESSION["question3"] ."<br><br>";
echo "The actual answer for the 4th question is both a and c." . "<br>";
echo "The entered  answer for the 1st question is " . $_SESSION["question4"] ."<br><br>";
echo "Your Total Score is " .$_SESSION['mark'] ."<br>";

?>
        
     
    
    <!-- <input type="submit" value="Continue" class="submitbtn"> -->
    <button class="submitbtn" onclick="window.location.href='login.php'">Continue</button>
    <button class="submitbtn" onclick="window.location.href=('insert.php')">Enter Mark</button>
    <button class="submitbtn" onclick="window.location.href=('prevscore.php')">View previous score</button>
</div>

