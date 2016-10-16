<?php
	if (isset($_COOKIE['id']) AND isset($_COOKIE['motDePasse']) AND isset($_COOKIE['email']))
	{
		include("modele/login/login.php");
		
		updateDateConnexion($_COOKIE['id']);
		
		session_start();
		$_SESSION['id'] = $_COOKIE['id'];
		$_SESSION['email'] = $_COOKIE['email'];
		$_SESSION['motDePasse'] = $_COOKIE['motDePasse'];
		
		
		
		header("Location: controleur/account/index.php");
	}
	else
	{	
		include("vue/login/login.php");
	}