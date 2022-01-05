<?php
	session_start();	
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
