<?php

	class Utilisateurs
	{	
		private $email;
		private $motDePasse;
		
		public function __construct($idUtilisateurs)
		{
			$bdd = new PDO("mysql:host=localhost:8889; dbname=TwizyX", "root", "root");
			$req = $bdd->prepare("SELECT email, motDePasse FROM utilisateurs WHERE id = :id");
			$req->execute(array("id" => $idUtilisateurs));
			$resultat = $req->fetch();
			
			$this->email = $resultat["email"];
			$this->motDePasse = $resultat["motDePasse"];
			
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getMotDePasse()
		{
			return $this->motDePasse;
		}
	}