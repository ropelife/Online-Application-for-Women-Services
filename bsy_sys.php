<?php

session_start();

include 'dbh.php';

$applicant_name=mysqli_real_escape_string($conn,$_POST['applicant_name']);
$husband_name=mysqli_real_escape_string($conn,$_POST['husband_name']);
$son_of=mysqli_real_escape_string($conn,$_POST['son_of']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$dob_mother=mysqli_real_escape_string($conn,$_POST['dob_mother']);
$dob_child=mysqli_real_escape_string($conn,$_POST['dob_child']);
$birth_place=mysqli_real_escape_string($conn,$_POST['birth_place']);
$no_of_child=mysqli_real_escape_string($conn,$_POST['no_of_child']);
$caste=mysqli_real_escape_string($conn,$_POST['caste']);


// echo $name.','.$email.','.$password.','.$contact.','.$address;

if(strlen($applicant_name)<=50)
{
	if(strlen($husband_name)<=50)
	{
		$sqle="SELECT husband_name FROM bsy_table WHERE husband_name='$husband_name'";
		$resulte=mysqli_query($conn,$sqle);
		if(mysqli_num_rows($resulte)==0)
		{
			if(strlen($son_of)<=50)
			{
				if(strlen($address)<=10)
				{
					$sqlc="SELECT address FROM bsy_table WHERE address='$address'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
						if(strlen($dob_mother)<=50)
						{
							if(strlen($dob_child)<=10)
							{
								$sqlc="SELECT dob_child FROM bsy_table WHERE dob_child='$dob_child'";
								$resultc=mysqli_query($conn,$sqlc);
								if(mysqli_num_rows($resultc)==0)
								{
									if(strlen($birth_place)<=50)
									{
										if(strlen($no_of_child)<=10)
										{
											$sqlc="SELECT no_of_child FROM bsy_table WHERE no_of_child='$no_of_child'";
											$resultc=mysqli_query($conn,$sqlc);
											if(mysqli_num_rows($resultc)==0)
												{
													if(strlen($caste)<=50)
														{
															$sql="INSERT INTO bsy_table (name,email,password,contact,address) VALUES ('$name','$email','$password','$contact','$address')";
															$result=mysqli_query($conn,$sql);

															echo "Successfully Registered";
														}
													else
														{
														header("LOCATION: bsy.php?error=caste");
														}
												}
											else
												{
												header("LOCATION: bsy.php?error=sameno_of_child");
												}
										}
										else
										{
										header("LOCATION: bsy.php?error=no_of_child");
										}
									}
									else
									{
									header("LOCATION: bsy.php?error=birth_place");
									}
								}
								else
								{
								header("LOCATION: bsy.php?error=samedob_child");
								}
							}
							else
							{
							header("LOCATION: bsy.php?error=dob_child");
							}
						}
						else
						{
						header("LOCATION: bsy.php?error=dob_mother");
						}
					}
					else
					{
					header("LOCATION: bsy.php?error=sameaddress");
					}
				}
				else
				{
				header("LOCATION: bsy.php?error=address");
				}
			}
			else
			{
			header("LOCATION: bsy.php?error=son_of");
			}
		}
		else
		{
		header("LOCATION: bsy.php?error=samehusband_name");
		}
	}
	else
	{
	header("LOCATION: bsy.php?error=husband_name");
	}
}
else
{
header("LOCATION: bsy.php?error=applicant_name");
}





echo "<br>";

echo "<a href='index.php'>Back to Home Page</a>";