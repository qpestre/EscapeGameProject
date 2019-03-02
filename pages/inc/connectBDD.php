<?php
	try
	{
	$bdd= new PDO(
				"mysql:host=localhost;dbname=escapeGame;charset=utf8", //Vérifier que la BDD s'appelle bien escapeGame, version temporaire
				"root",
				"",
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e){
		die('Erreur fatale :'.$e->getMessage());
	}


	function getRequete($TABLE, $ATTRIBUT)
	{
		try
		{
			//require("connectBDD.php");
			$myQuery="SELECT $ATTRIBUT FROM $TABLE ";
			$result=$bdd->query($myQuery);
			

			while($ligne = $result->fetch())
			{
				if($ligne[avancement]==$_GET['avancement'])
				{
					return $ligne[$ATTRIBUT];
				}
			}
		}
		catch(Exception $e){
		die('Erreur fatale :'.$e->getMessage());
		return null;
		}
	}
?>