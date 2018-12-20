<?php

session_start();

include 'dbh.php';

$saving=mysqli_real_escape_string($conn,$_POST['saving']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$amountf=mysqli_real_escape_string($conn,$_POST['amountf']);
$amountw=mysqli_real_escape_string($conn,$_POST['amountw']);
$mode=mysqli_real_escape_string($conn,$_POST['mode']);
$namen=mysqli_real_escape_string($conn,$_POST['namen']);
$dobm=mysqli_real_escape_string($conn,$_POST['dobm']);
$addressn=mysqli_real_escape_string($conn,$_POST['addressn']);
$share=mysqli_real_escape_string($conn,$_POST['share']);
$name_add=mysqli_real_escape_string($conn,$_POST['name_add']);
$name_a=mysqli_real_escape_string($conn,$_POST['name_a']);
$aadhar_no=mysqli_real_escape_string($conn,$_POST['aadhar_no']);
$open_minor=mysqli_real_escape_string($conn,$_POST['open_minor']);
$namem=mysqli_real_escape_string($conn,$_POST['namem']);
$namew=mysqli_real_escape_string($conn,$_POST['namew']);






// echo $name.','.$email.','.$password.','.$contact.','.$address;

if(strlen($saving)<=50)
{
	if(strlen($name)<=50)
	{
		$sqle="SELECT name FROM mkby_table WHERE name='$name'";
		$resulte=mysqli_query($conn,$sqle);
		if(mysqli_num_rows($resulte)==0)
		{
			if(strlen($fname)<=50)
			{
				if(strlen($address)<=100)
				{
					$sqlc="SELECT fname FROM mkby_table WHERE fname='$fname'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
						if(strlen($dob)<=50)
						{
							if(strlen($amountf)<=50)
							{
								$sqle="SELECT amountf FROM mkby_table WHERE amountf='$amountf'";
								$resulte=mysqli_query($conn,$sqle);
								if(mysqli_num_rows($resulte)==0)
								{
									if(strlen($amountw)<=50)
									{
										if(strlen($mode)<=50)
										{
											$sqle="SELECT amountw FROM mkby_table WHERE amountf='$amountw'";
											$resulte=mysqli_query($conn,$sqle);
											if(mysqli_num_rows($resulte)==0)
												{
													if(strlen($namen)<=50)
													{
														if(strlen($dobm)<=50)
														{
															$sqle="SELECT namen FROM mkby_table WHERE namen='$namen'";
															$resulte=mysqli_query($conn,$sqle);
															if(mysqli_num_rows($resulte)==0)
															{
																if(strlen($addressn)<=50)
																{
																	if(strlen($share)<=50)
																	{
																		$sqle="SELECT addressn FROM mkby_table WHERE addressn='$addressn'";
																		$resulte=mysqli_query($conn,$sqle);
																		if(mysqli_num_rows($resulte)==0)
																		{
																			if(strlen($name_add)<=50)
																			{
																				if(strlen($name_a)<=50)
																				{
																					$sqle="SELECT name_add FROM mkby_table WHERE name_add='$name_add'";
																					$resulte=mysqli_query($conn,$sqle);
																					if(mysqli_num_rows($resulte)==0)
																					{
																						if(strlen($aadhar_no<=50)
																						{
																							if(strlen($open_minor)<=16)
																							{
																								$sqle="SELECT aadhar_no FROM mkby_table WHERE aadhar_no='$aadhar_no'";
																								$resulte=mysqli_query($conn,$sqle);
																								if(mysqli_num_rows($resulte)==0)
																								{
																									if(strlen($namem)<=50)
																									{
																										if(strlen($standing)<=50)
																										{
																											$sqle="SELECT namem FROM mkby_table WHERE namem='$namem'";
																											$resulte=mysqli_query($conn,$sqle);
																											if(mysqli_num_rows($resulte)==0)
																											{
																												if(strlen($namew)<=50)
																												{
																													$sql="INSERT INTO mkby_table (saving,name,fname,address,dob,amountf,amountw,mode,namen,dobm,addressn,share,name_add,name_a,aadhar_no,open_minor,namem,namew) VALUES ('$saving','$name','$fname','$address','$dob','$amountf','$amountw','$mode','$namen','$dobm','$addressn','$share','$name_add','$name_a','$aadhar_no','$open_minor','$namem','$namew')";
																													$result=mysqli_query($conn,$sql);

																													echo "Successfully Registered";
																												}
																												else
																												{
																												header("LOCATION: mkby.php?error=namew");
																												}
																											else
																											{
																											header("LOCATION: mkby.php?error=samenamem");
																											}
																										else
																										{
																										header("LOCATION: mkby.php?error=namem");
																										}
																									else
																									{
																									header("LOCATION: mkby.php?error=open-minor");
																									}
																								else
																								{
																								header("LOCATION: mkby.php?error=sameaadhar_no");
																								}
																							else
																							{
																							header("LOCATION: mkby.php?error=aadhar_no");
																							}
																						else
																						{
																						header("LOCATION: mkby.php?error=name_a");
																						}
																					else
																					{
																					header("LOCATION: mkby.php?error=samename_add");
																					}
																				else
																				{
																				header("LOCATION: mkby.php?error=name_add");
																				}
																			else
																			{
																			header("LOCATION: mkby.php?error=share");
																			}
																		else
																		{
																		header("LOCATION: mkby.php?error=sameaddressn");
																		}
																	else
																	{
																	header("LOCATION: mkby.php?error=addressn");
																	}
																else
																{
																header("LOCATION: mkby.php?error=dobm");
																}
															else
															{
															header("LOCATION: mkby.php?error=samenamem");
															}		
														else
														{
														header("LOCATION: mkby.php?error=namem");
														}	
													else
													{
													header("LOCATION: mkby.php?error=mode");
													}	
												else
												{
												header("LOCATION: mkby.php?error=open-minor");
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



echo "<br>";

echo "<a href='index.php'>Back to Home Page</a>";