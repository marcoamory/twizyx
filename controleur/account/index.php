<?php
	
	session_start();
	
	include("../../modele/account/index.php");
	include("../../modele/account/order.php");
	
	$_SESSION['nom'] = recupereNomPrenom($_SESSION["id"])['nom'];
	$_SESSION['prenom'] = recupereNomPrenom($_SESSION["id"])['prenom'];
	$langue = recupereNomPrenom($_SESSION['id'])['langue'];
	
	
	if($langue == "fr")
	{
		$_SESSION['fr'] = "checked";
	}
	if($langue == "en")
	{
		$_SESSION['en'] = "checked";
	}
	if($langue == "de")
	{
		$_SESSION['de'] = "checked";
	}
	if($langue == "nl")
	{
		$_SESSION['nl'] = "checked";
	}
	if($langue == "es")
	{
		$_SESSION['es'] = "checked";
	}
	if($langue == "it")
	{
		$_SESSION['it'] = "checked";
	}
	
	$_SESSION['destinataire'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['nom'];
	$_SESSION['nomSociete'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['societe'];
	$_SESSION['rue'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['rue'];
	$_SESSION['numero'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['numero'];
	$_SESSION['boite'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['boite'];
	$_SESSION['ville'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['ville'];
	$_SESSION['codePostal'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['codePostal'];
	$_SESSION['pays'] = recupereAdresseLivraison($_SESSION['id'], "Livraison")['pays'];
		
	header("Location: ../../vue/account/index.php");
	
	