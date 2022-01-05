<?php
	session_start();	
?>
<html>
<head><title>Logout page by Sonia Friesen 0813682</title></head>
<body>
      <h1>Logout</h1>
      <table>
	  <form method="post">
		<tr>
			<td>Your Username: </td>
			<td>
				<div> <?php echo $_SESSION['userid'] ?> <div/>
						
			</td>
		</tr>
		<tr/>
		<tr>					
			<td><input type="submit" value="LOGOUT"  name = "submt" /></td>
		</tr>
	  </form>
	  </table>
	  
      <?php
			if (isset($_POST['submt']))			
			{								
				echo $_SESSION['userid'] . " is now logged out. <br/>";	
				session_destroy();
				echo " Click link to login <br/>";		
			}
		?>
		<br/>
		<a href="loginSF.php">Login Page</a>
</body>
</html>
