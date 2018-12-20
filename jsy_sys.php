<?php

session_start();

include 'dbh.php';

// print_r($_POST['formdata']);

$formdata=json_decode($_POST['formdata'], true);

// print_r($formdata);

$sub_center=$formdata['sub_center'];
$phc=$formdata['phc'];
$applicant_name=$formdata['applicant_name'];
$husband_name=$formdata['husband_name'];
$address=$formdata['address'];
$area=$formdata['area'];
$card=$formdata['card'];
$bpl_card_no=$formdata['bpl_card_no'];
$dmy=600;
$registration_no=$formdata['registration_no'];
$age=$formdata['age'];
$imp=$formdata['imp'];
$edd=$formdata['edd'];
$para=$formdata['para'];
$gravida=$formdata['gravida'];
$health_inst=$formdata['health_inst'];

// echo $name.','.$email.','.$password.','.$contact.','.$address;

if(strlen($sub_center)<=50)
{
	if(strlen($phc)<=50)
	{
		$sqle="SELECT phc FROM jsy_table WHERE phc='$phc'";
		$resulte=mysqli_query($conn,$sqle);
		if(mysqli_num_rows($resulte)==0)
		{
			if(strlen($applicant_name)<=50)
			{
				if(strlen($husband_name)<=50)
				{
					$sqlc="SELECT husband_name FROM jsy_table WHERE husband_name='$husband_name'";
					$resultc=mysqli_query($conn,$sqlc);
					if(mysqli_num_rows($resultc)==0)
					{
						if(strlen($address)<=100)
						{
							if(strlen($area)<=1000)
							{
								$sqlc="SELECT area FROM jsy_table WHERE area='$area'";
								$resultc=mysqli_query($conn,$sqlc);
								if(mysqli_num_rows($resultc)==0)
								{
									if(strlen($card)<=10)
									{
										if(strlen($bpl_card_no)<=20)
										{
											$sqlc="SELECT bpl_card_no FROM jsy_table WHERE bpl_card_no='$bpl_card_no'";
											$resultc=mysqli_query($conn,$sqlc);
											if(mysqli_num_rows($resultc)==0)
											{
												if(strlen($dmy)<=50)
												{
													if(strlen($registration_no)<=255)
													{
														$sqlc="SELECT registration_no FROM jsy_table WHERE registration_no='$registration_no'";
														$resultc=mysqli_query($conn,$sqlc);
														if(mysqli_num_rows($resultc)==0)
														{
															if(strlen($age)<=100)
															{
																if(strlen($imp)<=100)
																{
																	$sqlc="SELECT imp FROM jsy_table WHERE imp='$imp'";
																	$resultc=mysqli_query($conn,$sqlc);
																	if(mysqli_num_rows($resultc)==0)
																	{
																		if(strlen($edd)<=100)
																		{
																			if(strlen($para)<=50)
																			{
																				$sqlc="SELECT para FROM jsy_table WHERE para='$para'";
																				$resultc=mysqli_query($conn,$sqlc);
																				if(mysqli_num_rows($resultc)==0)
																				{
																					if(strlen($gravida)<=50)
																					{
																						if(strlen($health_inst)<=50)
																						{
																							$userId=$_SESSION['id'];

																							$sql="INSERT INTO jsy_table (sub_center,phc,applicant_name,applicant_id,husband_name,address,area,card,bpl_card_no,dmy,registration_no,age,imp,edd,para,gravida,health_inst) VALUES ('$sub_center','$phc','$applicant_name','$userId','$husband_name','$address','$area','$card','$bpl_card_no','$dmy','$registration_no','$age','$imp','$edd','$para','$gravida','$health_inst')";
																							$result=mysqli_query($conn,$sql);
																							// echo "Successfully Applied";

																							?>

																	

																							<div class="form-body">
														                                        <!--Sub Center Textfield-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Name of Sub Center :</label>
														                                            <div class="col-md-4">
														                                                <label id="sub_center" data-required="1" class="form-control"><?php echo $sub_center; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Sub Center Textfield-->
														                                        <!--PHC Textfield-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Name of PHC :</label>
														                                            <div class="col-md-4">
														                                                <label id="phc" data-required="1" class="form-control" ><?php echo $phc; ?></label>
														                                            </div>
														                                        </div>
														                                        <!--End of PHC Textfield-->
														                                        <!--Applicant Name Textfield-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Applicant's <small>(Pregnant Woman)</small> Name :</label>
														                                            <div class="col-md-4">
														                                                <label id="applicant_name" data-required="1" class="form-control"  ><?php echo $applicant_name; ?></label>
														                                        	</div>
														                                        </div>

														                                        <!--End of Applicant Name Textfield-->
														                                        <!--Husband Name Textfield-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Husband's Name :</label>
														                                            <div class="col-md-4">
														                                                <label name="husband_name" id="husband_name" data-required="1" value="" class="form-control"><?php echo $husband_name; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Husband Name Textfield-->
														                                        <!--Address Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Full Address :</label>
														                                            <div class="col-md-4">
														                                                <label class="form-control" rows="3" name="address" id="address" value=""><?php echo $address; ?></label>
														                                            </div>
														                                        </div>
														                                        <!--End of Address Field-->
														                                        <!--Area Radio Button Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Area :</label>
														                                            <div class="col-md-8">
														                                                <div class="radio-list">
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="Rural"> Rural </label>
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="Urban"> Urban </label>
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="Slums"> Slums </label>
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="TE"> TE </label>
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="Char"> Char </label>
														                                                    <label class="radio-inline">
														                                                        <input type="radio" name="area" id="area" value="Hill"> Hill </label>
														                                                </div>
														                                            </div>
														                                        </div>
														                                        <!--End of Area Radio Button Field-->
														                                        <!--Card Radio Button Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Posses a BPL Card? :</label>
														                                            <div class="col-md-8">
														                                                <div class="radio-list">
														                                                	<?php 
														                                                	if($card=='Yes'){
														                                                		?>
														                                                		<label class="radio-inline">
															                                                        <input type="radio" name="card" id="card" value="Yes" checked> Yes </label>
															                                                    <label class="radio-inline">
															                                                        <input type="radio" name="card" id="card" value="No"> No </label>
														                                                		<?php
														                                                	}
														                                                	else
														                                                	{
														                                                		?>
														                                                		<label class="radio-inline">
															                                                        <input type="radio" name="card" id="card" value="Yes"> Yes </label>
															                                                    <label class="radio-inline">
															                                                        <input type="radio" name="card" id="card" value="No" checked> No </label>
														                                                		<?php
														                                                	}
														                                                    ?>
														                                                </div>
														                                            </div>
														                                        </div>
														                                        <!--End of Card Radio Button Field-->
														                                        <!--BPL Card No Textfield-->
														                                        <div class="form-group">
														                                            <div class="col-md-2"></div>
														                                            <label class="control-label col-md-1">If Yes BPL Card No :</label>
														                                            <div class="col-md-4">
														                                                <label name="bpl_card_no" id="bpl_card_no" class="form-control"><?php echo $bpl_card_no; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of BPL Card No Textfield-->
														                                        <!--Notification Label-->
														                                        <div class="form-group">
														                                            <div class="col-md-2"></div>
														                                            <label class="control-label col-md-4">If No any other certification (Enclose a Photocopy) </label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Notification Label-->
														                                        <hr>
														                                        <!-- <h4><b>Date &amp; Registration of Pregnant Woman No. of the Antenatal Registrar of SC/PHC/CHC </b>:</h4>
														                                        <br> -->
														                                        <!--Date Field-->
														                                        <!-- <div class="form-group">
														                                            <label class="control-label col-md-3">Date :</label>
														                                            <div class="col-md-4">
														                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
														                                                    <input type="text" name="dmy" id="dmy" class="form-control" readonly> <span class="input-group-btn">
																							 				<button class="btn default" type="button"><i class="icon-calendar"></i></button>
																							 				</span>
																							 			</div> 														                                                
														                                            </div>
														                                        </div> -->
														                                        <!--End of Date Field-->
														                                        <!--Registration No Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Registration No. :</label>
														                                            <div class="col-md-4">
														                                                <label name="registration_no" id="registration_no" class="form-control" ><?php echo $registration_no; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Registration No Field-->
														                                        
														                                        <!--Age Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Age :</label>
														                                            <div class="col-md-2">
														                                                <label name="age" id="age" max="99" class="form-control" ><?php echo $age; ?></label>
														                                            </div>
														                                            <label class="control-label col-md-1">IMP :</label>
														                                            <div class="col-md-2">
														                                                <label name="imp" id="imp" class="form-control" ><?php echo $imp; ?></label>
														                                            </div>
														                                            <label class="control-label col-md-1">EDD :</label>
														                                            <div class="col-md-2">
														                                                <label name="edd" id="edd" class="form-control" ><?php echo $edd; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Age Field-->
														                                        <!--Order of Pregnancy Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-2"><b>Order of Pregnancy </b></label>
														                                            <label class="control-label col-md-1">Para :</label>
														                                            <div class="col-md-2">
														                                                <label name="para" id="para" type="text" class="form-control" ><?php echo $para; ?></label>
														                                            </div>
														                                            <label class="control-label col-md-1">Gravida:</label>
														                                            <div class="col-md-2">
														                                                <label name="gravida" id="gravida" type="text" class="form-control"><?php echo $gravida; ?></label>
														                                        	</div>
														                                        </div>
														                                        <!--End of Order of Pregnancy Field-->
														                                        <!--Health Inst Name Field-->
														                                        <div class="form-group">
														                                            <label class="control-label col-md-3">Decision taken for delivery at (Name of Health Inst) :</label>
														                                            <div class="col-md-4">
														                                                <label name="health_inst" id="health_inst" class="form-control" ><?php echo $health_inst; ?></label>
														                                        </div>

														                                        <button>Print</button>
														                                    </div>




																							<?php
																						}
																						else
																						{
																						header("LOCATION: jsy.php?error=health_inst");
																						}	
																					}
																					else
																					{
																					header("LOCATION: jsy.php?error=gravida");
																					}
																				}
																				else
																				{
																				header("LOCATION: jsy.php?error=samepara");
																				}
																			}
																			else
																			{
																			header("LOCATION: jsy.php?error=para");
																			}
																		}
																		else
																		{
																		header("LOCATION: jsy.php?error=edd");
																		}
																	}
																	else
																	{
																	header("LOCATION: jsy.php?error=sameimp");
																	}
																}
																else
																{
																header("LOCATION: jsy.php?error=imp");
																}
															}
															else
															{
															header("LOCATION: jsy.php?error=age");
															}
														}
														else
														{
														header("LOCATION: jsy.php?error=sameregistration_no");
														}
													}
													else
													{
													header("LOCATION: jsy.php?error=registration_no");
													}
												}
												else
												{
												header("LOCATION: jsy.php?error=dmy");
												}
											}
											else
											{
											header("LOCATION: jsy.php?error=samebpl_card_no");
											}
										}
										else
										{
										header("LOCATION: jsy.php?error=bpl_card_no");
										}
									}
									else
									{
									header("LOCATION: jsy.php?error=card");
									}
								}
								else
								{
								header("LOCATION: jsy.php?error=samearea");
								}
							}
							else
							{
							header("LOCATION: jsy.php?error=area");
							}
						}
						else
						{
						header("LOCATION: jsy.php?error=address");
						}
					}
				    else
					{
					header("LOCATION: jsy.php?error=samehusband_name");
					}	
				}
				else
				{
				header("LOCATION: jsy.php?error=husband_name");
				}
			}
			else
			{
			header("LOCATION: jsy.php?error=applicant_name");
			}
		}
		else
		{
		header("LOCATION: jsy.php?error=samephc");
		}
	}
	else
	{
	header("LOCATION: jsy.php?error=phc");
	}
}
else
{
header("LOCATION: jsy.php?error=sub_center");
}



echo "<br>";

echo "<a href='index.php'>Back to Home Page</a>";