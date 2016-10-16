<?php
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	include_once("../../modele/login/cryptage.php"); //Fonction de cryptage
	include_once("../../modele/login/register.php");
	
	if(getId($_POST['creerEmail']))
	{
		echo "Cet email est déjà apparenté à un compte";
	}	
	
	elseif ($_POST['creerMotDePasse'] != $_POST['creerConfirmationMotDePasse']) //Vérification mot de passe et confirmation
	{
		echo "mdp =! mdp2";
	}
	elseif (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['creerEmail'])) //Vérification mail
	{
		echo "Mail foireux";
	}
	else
	{
		
		$pass_hache = encrypt($_POST['creerMotDePasse'], $cleDeCryptage); //Cryptage du mot de passe
		$_POST['creerEmail'] = htmlspecialchars($_POST['creerEmail']); //On sécurise les données reçues
		
		insertFormData($_POST['creerEmail'], $pass_hache); //On insere dans la bdd
	
		
		
		session_start(); //On crée les variables sessions
		$_SESSION['id'] = getId($_POST['creerEmail']); //On recupere l'id du membre;
		$_SESSION['motDePasse'] = $pass_hache;
		$_SESSION['email'] = $_POST['creerEmail'];
		
		header("Location: ../../vue/account/index.php");
	}
