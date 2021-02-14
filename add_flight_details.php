<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Flight Schedule Details
		</title>
		<style>
			
			span{
				font-size:12px;
			}
			input{
				border:1.5px solid black;
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
		<form action="add_flight_details_form_handler.php" method="post">
<center><h2 style="color:#47E024;">ENTER THE FLIGHT SCHEDULE DETAILS</h2></center>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide"  id="flight_no" name="flight_no" placeholder="Enter Flight No."  required />
							<label for="flight_no" ><b>Flight No.</b></label>
					</span>			
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
			
				<tr>
					<td class="fix_table">
					
					<span style="" class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide"  id="origin" name="origin" placeholder="Enter Origin"  required />
							<label for="origin" ><b>Origin</b></label>
					</span>
				
					</td>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;text-align:center;" type="text" class="basic-slide"  id="destination" name="destination"  placeholder="Enter the destination" required />
							<label for="destination" ><b>Destination</b></label>
					</span>
				
				</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="date" class="basic-slide"  id="dep_date" name="dep_date"  placeholder="Enter the Departure date" required />
							<label for="dep_date" ><b>Departure</b></label>
					</span>
				</td>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="date" class="basic-slide"  id="arr_date" name="arr_date"  placeholder="Enter the destination" required />
							<label for="arr_date" ><b>Arrival</b></label>
					</span>
				</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
			
				<tr>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="time" class="basic-slide"  id="dep_time" name="dep_time"  required />
							<label for="dep_time" ><b>Departure Time</b></label>
					</span>
					</td>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="time" class="basic-slide"  id="arr_time" name="arr_time"  required />
							<label for="arr_time" ><b>Arrival Time</b></label>
					</span>
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="number" class="basic-slide"  id="seats_eco" name="seats_eco" placeholder="Enter No. of Seats"  required />
							<label for="seats_eco" ><b>Economy Seats</b></label>
					</span>
				
				</td>
					<td class="fix_table">
					<span style="" class="spa">
							<input style="margin-top:8px;" type="number" class="basic-slide"  id="seats_bus" name="seats_bus" placeholder="Enter No. of Seats"  required />
							<label for="seats_bus" ><b>Business Seats</b></label>
					</span>

					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">
						
						<span style="" class="spa">
							<input style="margin-top:8px;" type="number" class="basic-slide"  id="price_eco" name="price_eco" placeholder="Ticket Price(Economy Class)"  required />
							<label for="price_eco" ><b>Economy Price</b></label>
						</span>
					</td>
					<td class="fix_table">
						
						<span style="" class="spa">
							<input style="margin-top:8px;" type="number" class="basic-slide"  id="price_bus" name="price_bus" placeholder="Ticket Price(Business Class)"  required />
							<label for="price_bus" ><b>Business Price</b></label>
						</span>
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					
				</tr>
				<tr>
					<td class="fix_table">
						
						<span style="" class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide"  id="jet_id" name="jet_id" placeholder="Enter Jet Id"  required />
							<label for="jet_id" ><b>JET ID</b></label>
						</span>
					</td>
				</tr>
			</table>
			<br>
			<br>
			<input  style="margin-left:250px;" type="submit" value="Submit" name="Submit">
		</form>
		<!--check out addling local host in links and other places

		-->
	</body>
</html>