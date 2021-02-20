<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: index.html");
}


	
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$res=mysqli_query($conn,"SELECT * FROM reader WHERE email='$email'");
	$row=mysqli_fetch_array($res);
	if($row['password']==$pwd)
	{
		$_SESSION['user']=$row['email'];
		header("Location: index.html");
	}
	else
	{
	
	echo "<script>alert('wrong username or wrong password ');</script>";

	
		
	}



mysqli_close($conn);
?>