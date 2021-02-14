<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets Statistics
		</title>
		<style>
			
			span{
				font-size:12px;
			}
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
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<CENTER><h2 style="color:#47E024;">VIEW BOOKED TICKETS STATISTICS</h2></CENTER>
		<form action="view_booked_tickets_statistics_form_handler.php" method="post">
			<div>
			<table cellpadding="5" style="padding-left: 30px;">
				
				<tr>
					<td class="fix_table">
					<span style="margin-left:530px;" class="spa">
							<input style="margin-top:8px;" type="date" class="basic-slide"  id="date" name="j_date"  required />
							<label for="date" ><b>Date</b></label>
					</span>
				</td>
				</tr>
			</table>
			<br>
			<br>
			<input style="margin-left:630px;" type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>