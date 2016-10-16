<?php session_start();
	
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	
	include("../../modele/account/order.php"); //Fonctions SQL pour toutes actions sur bdd
	
	if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) //Vérification mail
	{
		echo "mail foireux";
	}
	else
	{
		//On sécurise les données personnelles
		$_POST['email'] = htmlspecialchars($_POST["email"]);
		$_POST['nom'] = htmlspecialchars($_POST['nom']);
		$_POST['prenom'] = htmlspecialchars($_POST['prenom']);
		
		//On sécurise les données d'adresse de livraison
		$_POST['nomDestinataire'] = htmlspecialchars($_POST['nomDestinataire']);
		$_POST['nomSociete'] = htmlspecialchars($_POST['nomSociete']);	
		$_POST['rue'] = htmlspecialchars($_POST['rue']);
		$_POST['numero'] = htmlspecialchars($_POST["numero"]);
		$_POST['boite'] = htmlspecialchars($_POST["boite"]);
		$_POST['ville'] = htmlspecialchars($_POST["ville"]);
		$_POST['codePostal'] = htmlspecialchars($_POST['codePostal']);
		$_POST['pays'] = htmlspecialchars($_POST["pays"]);
		
		//On sécurise les données d'adresse de facturation
		if(isset($_POST['difAdresses']))
		{
			$_POST['nomFacturation'] = htmlspecialchars($_POST["nomFacturation"]);
			$_POST['rueFacturation'] = htmlspecialchars($_POST['rueFacturation']);
			$_POST['numeroFacturation'] = htmlspecialchars($_POST["numeroFacturation"]);
			$_POST['boiteFacturation'] = htmlspecialchars($_POST["boiteFacturation"]);
			$_POST['villeFacturation'] = htmlspecialchars($_POST["villeFacturation"]);
			$_POST['codePostalFacturation'] = htmlspecialchars($_POST['codePostalFacturation']);
			$_POST['paysFacturation'] = htmlspecialchars($_POST["paysFacturation"]);
		}
		if(isset($_POST['facturationSociete']))
		{
			$societe = 1;
			$_POST['tva'] = htmlspecialchars($_POST["tva"]);
		}
		else
		{
			$societe = 0;
		}
		
		
		//On update les infos personnelles
		updateInfoContact($_SESSION['id']);
		
		//On insère les données relative à l'adresse.
		if(isset(recupereAdresseLivraison($_SESSION['id'], "Livraison")['nom']))
		{
			updateAdresseData($_SESSION['id'], "Livraison");
		}
		else
		{
			insertAdresseData($_SESSION['id'], "Livraison", $_POST['nomDestinataire'], $_POST['nomSociete'], '/', $_POST['rue'], $_POST['numero'], $_POST['boite'], $_POST['ville'], $_POST['codePostal'], $_POST['pays']);
		}
		//On check tout le bordel pour l'adresse de facturation
			
		if(isset($_POST['difAdresses'])) //Adresse != de l'adresse de livraison
		{
			if(isset($_POST["facturationSociete"])) //Facturation au nom d'une societe
			{
				insertAdresseData($_SESSION['id'], "Facturation", "/", $_POST['nomFacturation'], $_POST['tva'], $_POST['rueFacturation'], $_POST['numeroFacturation'], $_POST['boiteFacturation'], $_POST['villeFacturation'], $_POST['codePostalFacturation'], $_POST['paysFacturation']);
			}
			else //Facturation personelle
			{
				insertAdresseData($_SESSION['id'], "Facturation", $_POST['nomFacturation'], "/", "/", $_POST['rueFacturation'], $_POST['numeroFacturation'], $_POST['boiteFacturation'], $_POST['villeFacturation'], $_POST['codePostalFacturation'], $_POST['paysFacturation']);
			}
		}
		else //Adresse == adresse de livraison
		{
			if(isset($_POST["facturationSociete"])) //Facturation au nom d'une societe
			{
				insertAdresseData($_SESSION['id'], "Facturation", "/", $_POST['nomFacturation'], $_POST['tva'], $_POST['rue'], $_POST['numero'], $_POST['boite'], $_POST['ville'], $_POST['codePostal'], $_POST['pays']);
			}
			else // Facturation personnelle
			{
				insertAdresseData($_SESSION['id'], "Facturation", $_POST['nomFacturation'], "/", "/", $_POST['rue'], $_POST['numero'], $_POST['boite'], $_POST['ville'], $_POST['codePostal'], $_POST['pays']);
			}
		}
		//On récupère l'adresse de facturation
		$adresseFacturation = recupereAdresseFacturation($_SESSION['id'], "facturation");
		
		//On insère les données de commandes
		insertDataForm($_SESSION['id'], $_POST['modele'], $_POST["config"], $societe, $adresseFacturation);
		
		header("Location: index.php");
	}
		