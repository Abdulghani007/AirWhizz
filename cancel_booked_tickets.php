<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
		<style>
		</style>
		<link rel="stylesheet" type="text/css" href="css/style1.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
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
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="index.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="index.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="cancel_booked_tickets_form_handler.php" method="post">
			<center><h2 style="color:#47E024;">CANCEL BOOKED TICKETS</h2></center>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 30px;">
				
				<tr>
					<td class="fix_table">
					<span style="margin-left:540px;" class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide" id="pnr" name="pnr"  placeholder="Enter the PNR" required />
							<label for="pnr" ><b>PNR</b></label>
					</span>
					</td>
				</tr>
			</table>
			<br>
			<input style="width:200px; margin-left:600px;" type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>