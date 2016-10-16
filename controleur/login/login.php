<?php
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	include("../../modele/login/cryptage.php"); //Fonction de cryptage
	include("../../modele/login/login.php");
	
	$pass_hache = encrypt($_POST['connexionMotDePasse'], $cleDeCryptage); //Cryptage du mot de passe
	$_POST['connexionEmail'] = htmlspecialchars($_POST['connexionEmail']); //On sécurise les données reçues
	
	
	$id = connexion($_POST['connexionEmail'], $pass_hache)['id'];
	
	if (!$id)
	{
		echo "L'adresse mail et le mot de passe ne coïncident pas";
	}
	else
	{
		updateDateConnexion($id);
		if (isset($_POST['remember'])) //Si la personne a coché le "souvenez vous de moi"
		{
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $_POST['connexionEmail'];
			$_SESSION['motDePasse'] = $pass_hache;
			header("Location: ../../cookies.php");
		}
		else
		{
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['email'] = $_POST['connexionEmail'];
			$_SESSION['motDePasse'] = $pass_hache;
			header("Location: ../account/index.php");
		}	
	}

