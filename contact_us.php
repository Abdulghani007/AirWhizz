<?php
	session_start();
?>
<html>
	<head>
		<title>
			WELCOME TO AIRLINE RESERVATION SYSTEM
		</title>
       <!-- <link rel="stylesheet" type="text/css" href="css/style.css"/>-->
        <link rel="stylesheet" type="text/css" href="css/style1.css"/>        
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
        <h1 class="Title" id="title">
			AIRLINE RESERVATION SYSTEM
        </h1>
        <div> 
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
        <div class="container">

			<DIV class="contact_us">
				<center>CONTACT US</center>
				1HK17CS004@HKBK.EDU.IN<BR>
				1HK17CS034@HKBK.EDU.IN
					</DIV>
			

			<img src="images/shutterstock_33.jpg" width=100%>
		</div>
		<footer>
		<marquee><p ><b><center style="color:#0034ff;">This Project is developed by <label style="color:#47E024;">Abdul Ghani</label> and <label style="color:#47E024;">Ayesha Firdose</label> of 5th Semester Dept. of CSE @ HKBKCE 2019-2020</center></b></p></marquee>
		</footer>
    </body>
</html>