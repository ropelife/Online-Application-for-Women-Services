<?php
    ob_start();
   // require_once("init.php");
    //Session::startSession();
    //User::checkActiveSession();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<!-- Document Title
	============================================= -->
	<title>Indian Government | Women Services</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="index.php"><div>Home</div></a>
							</li>
							<li><a href="#"><div>Schemes</div></a>
                                <ul>
									<li><a href="mkby.php" target="_blank"><div>Mazi Kanya Bhagyashree</div></a></li>
                                    <li><a href="bsy.php"><div>Balika Samridhi</div></a></li>
                                    <li><a href="jsy.php"><div>Janani Suraksha</div></a></li>
                                    <li><a href="pmuy.php"><div>Ujjwala Yojana</div></a></li>
                                    <li><a href="vpby.php"><div>Varishtha Pension</div></a></li>
                                    <li><a href="pmjjby.php"><div>JeevanJyoti Yojana</div></a></li>
								</ul>
							</li>
							<li><a href="contact.php"><div>Complaint</div></a>
							</li>
                            <li><a href="#"><div><?php echo $_SESSION['member_name']; ?></div></a>
							</li>
							</li>
                            <li><a href="logout.php"><div>Logout</div></a>
							</li>
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax revslider-wrap clearfix">
			<div class="slider-parallax-inner">
				<!--
				#################################
					- THEMEPUNCH BANNER -
				#################################
				-->
				<div class="tp-banner-container rev_slider_wrapper fullscreen-container">
					<div class="tp-banner" >
						<ul>    <!-- SLIDE  -->
							<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/1.jpg"  data-saveperformance="off">
								<!-- MAIN IMAGE -->
								<img src="images/slider/1.jpg"  alt="Pradhanmatri Yojana"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->


							/*</li>
							<li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/8.jpg"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off">
								<!-- MAIN IMAGE -->
								<img src="images/slider/8.jpg"  alt="Jan Dhan Yojana"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

							</li>
							<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/7.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina">
								<!-- MAIN IMAGE -->
								<img src="images/slider/7.jpg"  alt="Women Empowerment"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">

							</li>
                            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/5.jpg" data-delay="20000"  data-saveperformance="off"  data-title="Responsive &amp; Retina">
								<!-- MAIN IMAGE -->
								<img src="images/slider/5.jpg"  alt="Ujawala Yojana"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">

							</li>
                            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/4.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Responsive &amp; Retina">
								<!-- MAIN IMAGE -->
								<img src="images/slider/4.jpg"  alt="Jan Dhan Yojana"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">

							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="divcenter center clearfix" style="max-width: 900px;">
						<h1>Welcome! This is <span>a Project by VJTI Students</span>.</h1>
						<h2>Online Application for Women Services; it's a one stop for all women services which has been started by our Government of India</h2>
					</div>

					<div class="line"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
							<div class="fbox-icon">
								<a href="#"><i class="icon-diamond"></i></a>
							</div>
							<h3>Mazi Kanya Bhagyashree</h3>
                            <p><b>Application Form;<br>Birth Certificate of the Girl Child;<br> Identity Proof or PAN Card &amp;Aadhaar Card of the Parent/Legal Guardian;<br> Residence Proof or Aadhaar Card of the Parent/Legal Guardian; </p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
							<div class="fbox-icon">
								<a href="#"><i class="icon-female"></i></a>
							</div>
							<h3>Balika Samridhi</h3>
							<p>Application Form; <br>Aadhar Card;<br>Domicile of parents of girl child of Maharashtra state;<br> Birth certificate of girl child;<br> Income certificate of parents; <br>Ration card; <br>Bank passbook of girl child;</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
							<div class="fbox-icon">
								<a href="#"><i class="icon-ambulance"></i></a>
							</div>
							<h3>Janani Suraksha</h3>
                            <p>Certificate for any other Scheme from which you get Benefit<br>Aadhar Card<br>
                            Proof of permanent Address<br>
                            Attested Copy of Parents Income Certificate<br></p>
                                                    </div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
							<div class="fbox-icon">
								<a href="#"><i class="icon-fire"></i></a>
							</div>
							<h3>Ujjwala Yojana</h3>
							<p>Application Form<br> Aadhar Card<br>Attested Copy of Income Certificate<br>Ration Card</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
							<div class="fbox-icon">
								<a href="#"><i class="icon-rupee"></i></a>
							</div>
							<h3>Varishta Pension</h3>
							<p>Application Form<br>Aadhaar Card or PAN Card
                                <br>Address Proof
                                <br>Birth Certificate
                                <br>Medical History
                                <br>KYC Documents
                                s</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
							<div class="fbox-icon">
								<a href="#"><i class="icon-folder"></i></a>
							</div>
							<h3> JeevanJyoti Bima Yojana </h3>
							<p>Application Form<br>Aadhar Card </p>
						</div>
					</div>

					<div class="clear"></div>

				</div>

                <div class="line"></div>
				<div class="clear"></div>

				<div class="col_full bottommargin-lg common-height">

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>
							<p style="line-height: 1.8;">We are converting the manual form filling process with easy online application.</p>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Our Mission</h3>
							<p style="line-height: 1.8;">To support Digital India work of PM Narendra Modi, our mission is to make the Government of India Digital First so that Indian's also become Digital.</p>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">What you get</h3>
                            <p style="line-height: 1.8;">  An   Online   Application   for Women form filling at their own convinience and their own time.</p>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="images/footer-logo.png" alt="Footer Logo" class="footer-logo" width="200px">
						Copyrights &copy; 2017 All Rights Reserved by Indian Gov.
					</div>

					<!--<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
					</div>-->

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			var apiRevoSlider = tpj('.tp-banner').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"include/rs-plugin/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				responsiveLevels:[1200,992,768,480,320],
				startwidth:1140,
				startheight:600,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:3,

				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
				},

				touchenabled:"on",
				onHoverStop:"on",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,


				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[8,7,6,5,4,3,2,1],
				parallaxDisableOnMobile:"on",

				keyboardNavigation:"on",

				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",


				forceFullWidth:"off",
				fullScreenAlignForce:"off",
				minFullScreenHeight:"400",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffset:"0px"
			});

			apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
			});

			apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});

		}); //END REVOLUTION SLIDER

	</script>

</body>
</html>