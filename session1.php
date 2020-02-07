 <?php
 session_start();

 // post method will work after clicking on submit button

 if(isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    // puttin values in session variable

    $_SESSION['usermail']=$mail;
    $_SESSION['password']=$password;
 }
 // Displaying message
 
 echo "your mail id is ".$_SESSION['usermail'];
 echo "<br>";
 echo "your password is ".$_SESSION['password'];
 ?>