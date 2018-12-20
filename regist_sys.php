<?php

session_start();

include 'dbh.php';

$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$address=mysqli_real_escape_string($conn,$_POST['address']);

// echo $name.','.$email.','.$password.','.$contact.','.$address;

if(strlen($name)<=50)
{
	if(strlen($email)<=50)
	{
		$sqle="SELECT email FROM users_table WHERE email='$email'";
		$resulte=mysqli_query($conn,$sqle);
		if(mysqli_num_rows($resulte)==0)
		{
			if(strlen($password)<=50)
			{
				if(strlen($contact)<=10)
				{
					$sqlc="SELECT contact FROM users_table WHERE contact='$contact'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
						if(strlen($address)<=50)
						{


							$sql="INSERT INTO users_table (name,email,password,contact,address) VALUES ('$name','$email','$password','$contact','$address')";
							$result=mysqli_query($conn,$sql);

							$userId=$conn->insert_id;

							$_SESSION['id']=$userId;

							header("LOCATION: userprofile.php");
						}
						else
						{
							header("LOCATION: regist.php?error=address");
						}
					}
					else
					{
						header("LOCATION: regist.php?error=samecontact");
					}
				}
				else
				{
					header("LOCATION: regist.php?error=contact");
				}
			}
			else
			{
				header("LOCATION: regist.php?error=password");
			}
		}
		else
		{
			header("LOCATION: regist.php?error=sameemail");
		}
	}
	else
	{
		header("LOCATION: regist.php?error=email");
	}
}
else
{
	header("LOCATION: regist.php?error=name");
}



// echo "<br>";

// echo "<a href='index.php'></a>";