<?php 
	require_once "../model/userModel.php";

	$userName = $_POST['userName'];
	$password = $_POST['password'];

	if($userName == null || $password == null)
	{
		echo '<h1>User Name or Password Empty!!!</h1>';
		echo'<br><a href="../view/login.html"> Go Back </a>';
	}
	else
	{		
		if(login_db($userName, $password))
		{
			header('location: ../view/Home.php');
			setcookie('status', $userName, time()+3600, '/');
		}
		else
		{
			echo '<h1>Wrong User Name or Password!!!</h1>';
			echo'<br><a href="../view/login.html"> Go Back </a>';
		}
	}

?>