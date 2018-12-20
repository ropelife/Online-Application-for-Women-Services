<?php

session_start();

include 'dbh.php';

?>

<!DOCTYPE html>
    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>User Profile</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="MobileOptimized" content="320">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!--Date Picker Styles-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
        <!--end of Date Picker Styles-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
        
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="../favicon.ico" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
               
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="assets/img/menu-toggler.png" alt="" /> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix"></div>
        <!-- BEGIN CONTAINER -->

        <?php

        $userId=$_SESSION['id'];

        $sql="SELECT * FROM users_table WHERE id='$userId'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        // print_r($row);
        ?>

        <div class="page-container">
            <a href="logout.php" style="float:right;color:white;font-size:25px;margin-top:-10px;right:10px">Log Out</a>
            <h3 style="color:white;margin-left:18px;font-size:30px">Women Services</h3><br>
            <p style="color:white;margin-left:18px;font-size:22px;margin-left:50px">Welcome,<br><?php echo $row['name']; ?></p><br><br>
            <a href="index.php"><p style="color:white;margin-left:18px;font-size:23px"><i class="fas fa-home"></i> Home</p></a><br>
            <p style="color:white;margin-left:18px;font-size:23px"><i class="fas fa-unlock"></i> Change Password</p><br>
            <p style="color:white;margin-left:18px;font-size:23px"><i class="fas fa-lock"></i> Application Forms</p><br>
            <!-- BEGIN PAGE -->
            <div class="page-content" style="height: 1000px;margin-left:300px;margin-top:-320px;position:fixed;width:80%">
                <!-- BEGIN PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE-->
                        <h3 class="page-title">
                  USER PROFILE 
               </h3>
                        <!-- END PAGE TITLE-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN VALIDATION STATES-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i></div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <!-- <form class="user_complain" action="complaint_sys.php" method="POST"> -->
                                    <div class="form-body">
                                    <p style="font-size: 23px"><?php echo $row['name']; ?></p>
                                    <p style="font-size: 25px">Schemes Applied :</p>
                                    
                                    <?php

                                    $flag=false;

                                    $sql1="SELECT * FROM jsy_table WHERE applicant_id='$userId'";
                                    $result1=mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($result1)!=0)
                                    {
                                        $flag=true;
                                        ?>
                                        <p style="font-size: 23px;margin-left: 25px">Janani Suraksha Yojna(JSY)</p>
                                        <?php
                                    }

                                    $sql1="SELECT * FROM bsy_table WHERE applicant_id='$userId'";
                                    $result1=mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($result1)!=0)
                                    {
                                        $flag=true;
                                        ?>
                                        <p style="font-size: 23px">BSY Form</p>
                                        <?php
                                    }

                                    $sql1="SELECT * FROM mkby_table WHERE applicant_id='$userId'";
                                    $result1=mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($result1)!=0)
                                    {
                                        $flag=true;
                                        ?>
                                        <p style="font-size: 23px">MKBY Form</p>
                                        <?php
                                    }

                                    if($flag==false)
                                    {
                                        ?>
                                        <p>No Schemes applied to yet.</p>
                                        <?php
                                    }

                                    ?>  

                                      
 
                                   
                                </div>  
                                <!-- </form> -->
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
            <!-- END PAGE -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
    </body>
    </html>