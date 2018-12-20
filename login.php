<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>


<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

.login-btn{
	background-color: #1967d2;
	width:80px;
	font-size:17px;
	margin-left:215px;
	padding: 8px 13px 8px 13px;
	margin-top:5px;
	color:white;
	border:1px solid #1967d2;
}


.login-btn:hover {
	opacity: 0.8;
}


.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
}


.login-box {
	padding: 16px;
  
	height:220px;
	width:300px;
	margin:0px auto;
	margin-top:10px;
	background: rgba(0, 0, 0, 0.3)

}

span.psw {
	float: right;
	padding-top: 16px;
}



.close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: red;
	cursor: pointer;
}

.animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
}

.fas fa-sign-in-alt{
	height:20px;
	width:20px;
}

@-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
}
	
@keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
	span.psw {
	   display: block;
	   float: none;
	}
	.cancelbtn {
	   width: 100%;
	}
}
</style>
</head>



<body background="icons/login_back.jpg">
	<img src="icons/girl1.png" style="height:170px;width:170px;margin:0 auto;display:block;margin-top:80px"><br>
	
	<form method="POST" action="login_sys.php">
		<div class="login-box">
		  	<p style="margin-left:8px;font-size:24px;color:white;margin-top:10px">Login to your account</p>
		  	<i class="fas fa-user" style="height:20px;width:20px"></i><input type="text" placeholder="Email" name="email" required style="width:290px;margin-left:5px;margin-top:0px"><br>
		  	<input type="password" placeholder="Password" name="password" required style="width:290px;margin-left:5px"><br>
			
		  	<p style="font-size:15px;text-align:center;color:red">
			
				<?php

				if(isset($_GET['error']))
				{
				
					?>
					Either the username or the password is wrong
					<?php					
				}

				?>

			</p>

		  	<button type="submit" class="login-btn">Login <i class="fas fa-sign-in-alt"></i></button>
		</div>
	</form>
	



	  	<!--<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
	  	</label>
	</div>

	<div class="" style="">
	  	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  	<span class="psw">Forgot <a href="#">password?</a></span>
	</div>
  	</form>
	</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>-->

</body>
</html>
