<?php

session_start();

include 'dbh.php';

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

// echo $email.','.$password;

$sql="SELECT id FROM users_table WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)!=0)
{
	$row=mysqli_fetch_assoc($result);
	// echo 'Succesfully Logged In';
	// echo '<br>';
	// echo '<a href="index.php">Continue to Home Page</a>';

	$_SESSION['id']=$row['id'];

	header("LOCATION: userprofile.php");
}
else
{
	header("LOCATION: login.php?error=true");
}