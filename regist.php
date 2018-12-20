<?php

$title='Registration Form';
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
		outline: none;
}

.cancelbtn {
		padding: 14px 20px;
		background-color: #f44336;
}

.cancelbtn{
	float: left;
	width: 50%;
}

.signupbtn {
	margin-left:100px;
	color:white;
	background-color:#1b671b;
	width:90px;
	height:40px;  
	border:1px solid #1b671b;
}

.signupbtn:hover{
	background: rgba(0, 0, 0, 0.5);
	border:1px solid rgba(0,0,0,0.5);
	color:white;
}

.container {
		margin:0px auto;
		margin-top:-20px;
		width:290px;
		background: rgba(0, 0, 0, 0.3);
		height:590px;
}

.close {
		position: absolute;
		right: 35px;
		top: 15px;
		font-size: 40px;
		font-weight: bold;
		color: #f1f1f1;
}

.close:hover,
.close:focus {
		color: #f44336;
		cursor: pointer;
}

.clearfix::after {
		content: "";
		clear: both;
		display: table;
}

@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			 width: 100%;
		}
}
</style>

<body background="icons/login_back.jpg">
	<p style="text-align:center;font-size:25px;color:#ef044b;letter-spacing:1px;margin-top:20px">Sign Up!</p>

	<form class="user_regist" action="regist_sys.php" method="POST">
		<div class="container"><br>		

			<label for="email"><p style="color:white;font-size:13px;margin-left:15px;margin-top:10px">Name</p></label>
			<input type="text" placeholder="Enter name" name="name" required style="width:260px;margin-left:15px;height:15px">

			<label for="email"><p style="color:white;font-size:13px;margin-left:15px;margin-top:10px">Email</p></label>
			<input type="text" placeholder="Enter Email" name="email" required style="width:260px;margin-left:15px;height:15px">

			<label for="psw"><p style="color:white;font-size:13px;margin-left:15px;margin-top:0px">Password</p></label>
			<input type="password" placeholder="Enter Password" name="password" required style="width:260px;margin-left:15px;height:15px">
			
			<!-- <label for="psw-repeat"><p style="color:white;font-size:13px;margin-left:15px;margin-top:0px">Confirm Password</p></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required style="width:260px;margin-left:15px;height:15px"> -->
				
			<label for="email"><p style="color:white;font-size:13px;margin-left:15px;margin-top:0px">Contact no.</p></label>
			<input type="text" placeholder="10-digit number" name="contact" required style="width:260px;margin-left:15px;height:15px">

			<label for="email"><p style="color:white;font-size:13px;margin-left:15px;margin-top:0px">Address</p></label>
			<input type="text" name="address" required style="width:260px;margin-left:15px;height:15px">
			
			<!--
			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			</label>
			-->

			<p style="font-size:15px;text-align:center;color:red">
			
				<?php

				if(isset($_GET['error']))
				{
					if($_GET['error']=='name' || $_GET['error']=='email' || $_GET['error']=='password' || $_GET['error']=='address')
					{
						?>
						Length of <?php echo $_GET['error']; ?> should be less than 50 characters
						<?php
					}
					else if($_GET['error']=='contact')
					{
						?>
						Length of <?php echo $_GET['error']; ?> should be less than 10 characters
						<?php
					}
					else if($_GET['error']=='sameemail')
					{
						?>
						This email already exists
						<?php
					}
					else if($_GET['error']=='samecontact')
					{
						?>
						This contact already exists
						<?php
					}
				}

				?>

			</p>


			<p style="font-size:15px;text-align:center">By creating an account you agree to our <a href="#" style="color:blue;font-size:15px">Terms & Privacy</a>.</p>

			<a href="login.php">Sign In</a>

			<div class="clearfix">
				<!--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
				<button type="submit" class="signupbtn" style="font-size:14px">Sign Up</button>
			</div>
		</div>
	</form>

<!-- <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
		if (event.target == modal) {
				modal.style.display = "none";
		}
}
</script> -->

</body>
</html>
