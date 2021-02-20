<?php

session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: index.html");
}
include_once 'dbconnect.php';


 $email = $_POST['email'];
 $name =$_POST['name'];
  $pwd=$_POST['pwd'];
  

 

  if(isset($_POST['name'])){
 	$name = $_POST['name'];
 }else{
 	$name = "";
 }
 
  

 
 if(mysqli_query($conn,"INSERT INTO reader(email,name,password) VALUES('$email','$name','$pwd')"))
 {
  $_SESSION['user']=$email;
        header("Location: index.html");
         }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }

mysqli_close($conn);
?>