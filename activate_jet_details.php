<?php
	session_start();
?>
<html>
	<head>
		<title>
			Activate Aircraft
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
				<li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="activate_jet_details_form_handler.php" method="post">
			<center><h2 style="color:#47E024;">ENTER THE AIRCRAFT TO BE ACTIVATED</h2></center>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Aircraft has been successfully activated.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 20px;">
				
				<tr>
					<td class="fix_table">
					<span style="margin-left:550px;" class="spa">
						<input style="margin-top:8px;" class="basic-slide" id="jet_id" name="jet_id" type="text" placeholder="Enter valid JET ID" required />
						<label for="jet_id" ><b>JET ID</b></label>
					</span>
					</td>
				</tr>
			</table>
			<br>
			<input style="margin-left:630px;" type="submit" value="Activate" name="Activate">
			</div>
		</form>
	</body>
</html>