<?php
    include_once '../includes/db_connect.php';
    include_once '../includes/functions.php';
    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $name_acc = $_POST['name_acc'];
	$psa = $_POST['psa'];
    $mob = $_POST['mob'];
    $name_nom = $_POST['name_nom'];
    $sol_id = $_POST['sol_id'];
    $name_gau = $_POST['name_gau'];
    $email = $_POST['email'];
    $temp_time = strtotime($_POST['date']);
    $date = date('Y-m-d', $temp_time);
    $relationship = $_POST['relationship'];
    $address_subscriber = $_POST['address_subscriber'];
    $address_nominee = $_POST['address_nominee'];
   /* $name_officier = $_POST['name_officier']; */
    /****$designation_officier= $_POST['designation_officier'];
    $contact_no = $_POST['contact_no'];
    $pho_name = $_POST['pho_name'];
	$name_sub= $_POST['name_sub'];
	$acc_no= $_POST['acc_no'];
	$aadhar_no=$_post['aadhar_no'];*/
    $da = date_create()->format('Y-m-d');  
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
    /*echo "name_acc : $name_acc<br>psa: $psa<br>mob: $mob<br>name_nom: $name_nom<br>sol_id: $sol_id<br>name_gau: $name_gau<br>email: $email<br>date: $date<br>relationship: $relationship<br>address_subscriber: $address_subscriber<br>Address_nominee: $address_nominee<br>Date of Application: $date_of_application";

    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
   if ($insert_stmt = $mysqli->prepare("INSERT INTO pmjjby(name_acc, psa, mob, name_nom, sol_id, name_gau, email, date, relationship, address_subscriber, address_nominee, da) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )")) 
    {
        $insert_stmt->bind_param('ssdsssssssss', $name_acc, $psa, $mob, $name_nom, $sol_id, $name_gau, $email, $date, $relationship, $address_subscriber, $address_nominee, $da);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
           /* header('Location: ../error.php?err=Registration failure: PMJJBY');*/
        }
    }
?>