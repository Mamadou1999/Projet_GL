<?php
	
	// Connexion sur la base de données 
	try
	{
		$bdd = new PDO('mysql:host=localhost; dbname=Projet_GL; charset=utf8', 'root', 'passer');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	// Récupération des données saisies par l'utilisateur 
	$login = $_GET['login'];
	$mdp = $_GET['mdp'];
	
	//Parcours des elements de la table de base de données pour voir si les identifiants saisis s'y trouvent 
	$req = $bdd->prepare('SELECT email, mdp FROM users WHERE email= ? AND mdp= ?');
	$req->execute(array($login, $mdp));
	$array = $req->fetchALL();
	$nb = count($array);

	//Nombre de ligne retourné(s) par la requête 
	//Si les identifiants saisis ne se trouvent pas notre base de données  le message ci-dessous est affiché
	if ($nb == 0)
	{
		echo "Desolé vos identifiants ne figurent pas dans notre base de données";
	}
	//Si les identifiqnts se trouvent dasn la base de notre données la page de la calculatrice sera affichée
	else
	{
		header('Location: calculer.php');
	}
?>