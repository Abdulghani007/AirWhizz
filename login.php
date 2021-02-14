<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{
		font-family:sans-serif;
		color:black;
	}
	.back{
		b
		width:fixed;
		border:2px;
		border-color:black;
		height:600px;
	}
	</style>
</head>
<body >
<img  style="width:75px;" class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 class="Title" id="title">
			AIRLINE RESERVATION SYSTEM
		</h1>
		<div>
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>

<div class="back">

<div class="container" id="container">


<!--New User-->
<div class="form-container sign-up-container">
<form action="new_user_form_handler.php" method="POST" id="new_user_from">
	<h1  class="login_font">Create Account</h1><br>
	
	<span class="spa">
		<input class="basic-slide" id="name" name="name" type="text" placeholder="Enter your Name" />
		<label for="name" ><b>Name</b></label>
	</span>

	<span class="spa">
		<input class="basic-slide" id="new_username" name="username" type="text" placeholder="Enter your Username" />
		<label for="new_username" ><b>Username</b></label>
	</span>
	<span class="spa">
		<input class="basic-slide" id="email" name="email" type="email" placeholder="Enter your Email" />
		<label for="email" ><b>Email-id</b></label>
	</span>

	<span class="spa">
		<input class="basic-slide" id="new_pass" name="password" type="password" placeholder="Enter your Password" />
		<label for="new_pass" ><b>Password</b></label>
	</span>
	<br>
	<input type="submit" value="Sign Up" name="Submit">
</form>
</div>
<!--END OF NEW USER-->

<!--LOGIN-->
<div class="form-container sign-in-container">
	<form action="login_handler.php" method="POST">
		<h1 class="login_font">Sign In</h1>
	
	<br>
	<span class="spa">
		<input class="basic-slide" id="username" name="username" type="text" placeholder="Enter your Username" />
		<label for="username" ><b>Username</b></label>
	</span>
	<span class="spa">
		<input class="basic-slide" id="pass" name="password" type="password" placeholder="Enter your Password" />
		<label for="pass" ><b>Password</b></label>
	</span>

	<strong>User Type:</strong><br>
	Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
	<br>
	<?php
	if(isset($_GET['msg']) && $_GET['msg']=='failed') // from login_handler.php
	{
		echo "<br>
		<strong style='color:red'>Invalid Username/Password</strong>
		<br><br>";
	}
	?>
	
	<input type="submit" name="Login" value="Sign In">
	</form>
</div>
<!--END OF LOGIN-->

<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<input type="submit" class="ghost" id="signIn" value="Sign In"/>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<input type="submit" class="ghost" id="signUp" value="Sign Up"/>
		</div>
	</div>
</div>
</div>
</div>
<footer>
		<marquee><p ><b><center style="color:#0034ff;">This Project is developed by <label style="color:#47E024;">Abdul Ghani</label> and <label style="color:#47E024;">Ayesha Firdose</label> of 5th Semester Dept. of CSE @ HKBKCE 2019-2020</center></b></p></marquee>
		</footer>
<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>