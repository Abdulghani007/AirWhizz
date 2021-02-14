<?php
	session_start();
?>
<html>
	<head>
		<title>
			Delete Flight Schedule Details
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
		<form action="delete_flight_details_form_handler.php" method="post">
			<center><h2 style="color:#47E024;">ENTER THE FLIGHT SCHEDULE TO BE DELETED</h2></center>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color:green; padding-left:20px;'>The Flight Schedule has been successfully deleted.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red; padding-left:20px;'>*Invalid Flight No./Departure Date, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 20px;">
				
				<tr>
					<td class="fix_table">
					<span style="margin-left:350px" class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide"  id="flight_no" name="flight_no" placeholder="Enter Flight No."  required />
							<label for="flight_no" ><b>Flight No.</b></label>
					</span>	
					</td>
					<td class="fix_table">
					<span style="margin-left:100px" class="spa">
							<input style="margin-top:8px;" type="date" class="basic-slide"  id="departure_date" name="departure_date" placeholder="Enter Flight No."  required />
							<label for="departure_date" ><b>Departure Date</b></label>
					</span>	
					</td>
				</tr>
			</table>
			<br>
			<br>
			<input style="margin-left:45%;" type="submit" value="Delete" name="Delete">
			</div>
		</form>
	</body>
</html>