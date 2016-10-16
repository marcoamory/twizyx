<?php
	
	session_start();
	
	setcookie('email', $_SESSION['email'], time() + 365*24*3600, null, null, false, true);
	setcookie('motDePasse', $_SESSION['motDePasse'], time() + 365*24*3600, null, null, false, true);
	setcookie('id', $_SESSION['id'], time() + 365*24*3600, null, null, false, true);
	header("Location: index.php");