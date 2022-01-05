<?php
	session_start();
	if (empty($_SESSION['userid']))
	{
		header("Location: loginSF.php");
		die();
	}
?>
<html>
<head><title>Menu page by Sonia Friesen 0813682</title></head>

<body>
<h1>Menu Page</h1>
<?php
	echo 'Welcome ' . $_SESSION['userid'] . ' to the menu page </br>';
	echo $_SESSION['userid'] . ', there is not much happening here </br>';
	echo $_SESSION['userid'] . ', please refer link to logout page </br>';
?>
<br/>
<a href="logoutSF.php">Logout Page</a>
</body>
</html>
