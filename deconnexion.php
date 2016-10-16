<?php
	session_start();
	if (!isset($_SESSION['email']) || !isset($_SESSION['motDePasse']) || !isset($_SESSION['id']))
	{
		header("Location: index.php");
	}
	else
	{
		setcookie('email', ''); //Suppression cookies
		setcookie('motDePasse', '');
		setcookie('id', '');
		$_SESSION = array(); //Suppression session		
		session_destroy();
		header("Location: index.php");
	}	
