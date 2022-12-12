<?php 
	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	setcookie('status', 'true', time()-100, '/');
	header('location: ../view/login.html');
?>