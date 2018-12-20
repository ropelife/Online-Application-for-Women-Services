<!DOCTYPE html>
<?php


?>
    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Complaint Page</title>
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
        <link rel="shortcut icon" href="../favicon.ico" /> </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="/index.php"><br> </br> <img src="images/complaint.png" alt="logo" class="img-responsive" width="180" /> </a>
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
        <div class="page-container">
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE-->
                        <h3 class="page-title">
                  COMPLAIN BOX 
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
                                <div class="caption"><i class="icon-reorder"></i>Complain</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form class="user_complain" action="complaint_sys.php" method="POST">
                                    <div class="form-body">
                                        <!--name of applicant Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="fname" id="fname" data-required="1" class="form-control"/> </div>
                                        </div><br>
                                        <!--End of name of applicant Textfield-->
                                        <!--name of husband Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name:</label>x
                                            <div class="col-md-4">
                                                <input type="text" name="lname" id="lname" data-required="1" class="form-control" /> </div>
                                        </div><br>
                                        <!--End of name of husband Textfield-->
										 <!--son of Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="f_address" id="f_address" data-required="1" class="form-control" /> </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3">Email:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="email_c" id="email_c" data-required="1" class="form-control" /> </div>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="des" id="des" value=""> </textarea>
                                            </div>
                                        </div>
                                        <!--End of Address Field-->
                                      
                                                    <p style="font-size:15px;text-align:center;color:red">
            
                <?php

                if(isset($_GET['error']))
                {
                    if($_GET['error']=='fname' || $_GET['error']=='lname' || $_GET['error']=='email_c')
                    {
                        ?>
                        Length of <?php echo $_GET['error']; ?> should be less than 50 characters
                        <?php
                    }
                    else if($_GET['error']=='f_address')
                    {
                        ?>
                        Length of <?php echo $_GET['error']; ?> should be less than 100 characters
                        <?php
                    }
                    else if($_GET['error']=='des')
                    {
                        ?>
                        Length of <?php echo $_GET['error']; ?> should be less than 1000 characters
                        <?php
                    }

                }

                ?>

            </p>

                                     
                                    </div>
                                    <div class="form-actions fluid">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Complain</button>
                                        </div>
                        </div>  
                                </form>
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
       