<?php
session_start();

$error = '';

if (isset($_POST['Login']))
{
		require("./connectvars.php");
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . 
	   $mysqli->connect_errno . ") " .
	   $mysqli->connect_error;
	}
		$userid = $mysqli->real_escape_string($_POST['username']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		$result = $mysqli->query("SELECT * FROM `users` WHERE " .
		 "userid='" . $userid . "' && " .
		 "password=password('" . $password . "')" );	  
		if ($result->num_rows ==1)
		{
			$_SESSION['userid'] = $userid;
			header("Location: menu.php");
			die();
		}
		else
		{
			$error = "Your login credentials are invalid. Please try again.";
		}
}
?>
<html>
<head><title>Login page by Sonia Friesen 0813682</title></head>
<body>
      <h1>Login</h1>
      <table>
	  <form method="post">
		<tr>
			<td>Your Username: </td>
			<td>
				<input type="text" name="username"/>				
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" />
			</td>
		</tr>
		<tr>
			<td><input type="submit" value = "LOGIN"/></td>
		</tr>
	  </form>
	  </table>
	  
      <?php
			if (!empty($_POST['username']))
			{
				//really simple way of preventing <script> code injection
				$_SESSION['userid']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];
				header('Location: menuSF.php');
				die();
			}
		?>
</body>
</html>
