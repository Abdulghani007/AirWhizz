<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			
			span{
				font-size:12px;
			}

			form 
			{
				background-color: #FFFFFF;
				display: flex;
				align-items: center;
				
				flex-direction: column;
				padding: 0 50px;
				height: 100%;
				text-align: center;
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
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2 style="color:#47E024;">VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
			<div>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide" required  id="flight_no" name="flight_no"  placeholder="Enter the Flight No." />
							<label for="flight_no" ><b>Flight No.</b></label>
						</span>
				</td>
					<td class="fix_table">
					<span class="spa">
							<input style="margin-top:8px;" type="date" class="basic-slide" required  id="departure_date" name="departure_date"  placeholder="Enter the Deaprture." />
							<label for="departure_date" ><b>Departure Date</b></label>
						</span>
				</td>
				
				</td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>