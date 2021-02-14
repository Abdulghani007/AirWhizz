<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Aircrafts Details
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
		<form action="add_jet_details_form_handler.php" method="post">
			<h2>ENTER THE AIRCRAFTS DETAILS</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Aircraft has been successfully added.</strong>
						<br><br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Jet ID already exists, please enter a new Jet ID.</strong>
						<br><br>";
				}
			?>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide" id="jet_id" name="jet_id"  placeholder="Enter valid Jet ID" />
							<label for="jet_id" ><b>JET ID</b></label>
					</span>
				</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span class="spa">
							<input style="margin-top:8px;" type="text" class="basic-slide" id="jet_type" name="jet_type"  placeholder="Enter the Jet Type/Model" />
							<label for="jet_type" ><b>JET TYPE</b></label>
					</span>
				
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				
				<tr>
					<td class="fix_table">
					<span class="spa">
							<input style="margin-top:8px;" type="number" class="basic-slide" id="jet_capacity" name="jet_capacity"  placeholder="Enter the total capacity of the Jet" />
							<label for="jet_capacity" ><b>Capacity</b></label>
					</span>
					
					</td>
				</tr>
			</table>
			<br>
			<br>
			<input style="margin-left:130px;" type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>