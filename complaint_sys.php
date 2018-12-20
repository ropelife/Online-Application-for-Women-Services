<?php

session_start();

include 'dbh.php';

$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$f_address=mysqli_real_escape_string($conn,$_POST['f_address']);
$email_c=mysqli_real_escape_string($conn,$_POST['email_c']);
$des=mysqli_real_escape_string($conn,$_POST['des']);

// echo $name.','.$email.','.$password.','.$contact.','.$address;

if(strlen($fname)<=50)
{
	if(strlen($lname)<=50)
	{
		$sqle="SELECT lname FROM complain_table WHERE lname='$lname'";
		$resulte=mysqli_query($conn,$sqle);
		if(mysqli_num_rows($resulte)==0)
		{
			if(strlen($f_address)<=100)
			{
				if(strlen($email_c)<=50)
				{
					$sqlc="SELECT email_c FROM complain_table WHERE email_c='$email_c'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
						if(strlen($des)<=1000)
						{


							$sql="INSERT INTO complain_table (fname,lname,f_address,email_c,des) VALUES ('$fname','$lname','$f_address','$email_c','$des')";
							$result=mysqli_query($conn,$sql);

							echo "Complain Accepted";
						}
						else
						{
							header("LOCATION: complaint.php?error=des");
						}
					}
					else
					{
						header("LOCATION: complaint.php?error=samedes");
					}
				}
				else
				{
					header("LOCATION: complaint.php?error=email_c");
				}
			}
			else
			{
				header("LOCATION: complaint.php?error=f_address");
			}
		}
		else
		{
			header("LOCATION: complaint.php?error=samelname");
		}
	}
	else
	{
		header("LOCATION: complaint.php?error=lname");
	}
}
else
{
	header("LOCATION: complaint.php?error=fname");
}



echo "<br>";

echo "<a href='index.php'>Back to Home Page</a>";