<html>
	<head>
		<title>Add New User</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['name']))
				{
					$data_missing[]='Name';
				}
				else
				{
					$name=$_POST['name'];
				}

				if(empty($_POST['username']))
				{
					$data_missing[]='User Name';
				}
				else
				{
					$user_name=trim($_POST['username']);
				}
				if(empty($_POST['email']))
				{
					$data_missing[]='Email ID';
				}
				else
				{
					$email=trim($_POST['email']);
				}
				if(empty($_POST['password']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$password=md5($_POST['password']);
				}
				

				if(empty($data_missing))
				{
					require_once('MySQL Database Connection file/mysqli_connect.php');
					$query="INSERT INTO Customer (name,customer_id,email,pwd) VALUES (?,?,?,?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ssss",$name,$user_name,$email,$password);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					
					if($affected_rows==1)
					{
						header('location:user_reg_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>