<?php

include("connection.php");

if (isset($_POST['register']))
{
	
//variable declaration
	$name=$_POST['name'];
	$user_name=$_POST['username'];
	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
	$admin_id=$_POST['adminid'];

//validation
	if ($name=='')
	{
		echo "<script>alert ('check for errors pls')</script>";
		echo "<script>window.open('register.php','_self')</script>";
		exit();
	}
	if ($user_name=='')
	{
		echo "<script>alert ('check for errors pls')</script>";
		echo "<script>window.open('register.php','_self')</script>";
		exit();
	}
	if ($user_email=='')
	{
		echo "<script>alert ('check for errors pls')</script>";
		echo "<script>window.open('register.php','_self')</script>";
		exit();
	}
	if ($user_password=='')
	{
		echo "<script>alert ('check for errors pls')</script>";
		echo "<script>window.open('register.php','_self')</script>";
		exit();
	}

//check double registration
	$check_email_query="select * from users WHERE user_email='$user_email';
	$run_query=mysqli_query($dbcon,$check_email_query);
	
	if(mysqli_num_rows($run_query)>0)
		{
			echo "<script> alert('email $user_email is already in the database') </script>";
			exit();
		}
	
		$insert_user="insert into users(name,user_name,user_email,user_password,admin_id) VALUE ('$name','$user_name','$user_email','$user_password','$admin_id')";
	
		if (mysqli_query($dbcon,$insert_user))
		{
			echo "<script>window.open('login.php','_self')</script>";
		}
}

?>