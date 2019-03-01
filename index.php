
<?php

if (isset($_GET['url'])) { //Si URL non vide

	$url = explode('/', $_GET['url']); // Recuperer les parametres entre les slashs

} else {
	$url = ['accueil']; // si url vide charger l accueil
}

$website_name = 'Escape Game';

if (isset($url[0]) AND $url[0] == 'accueil' AND (!isset($url[1]) OR $url[1] == '')) { // si on a qu un /accueil 

	$title="Escape Game : à l'aventure";
	$call='pages/accueil.php';
	$footer="pages/inc/footerAccueil.php";
	$header=true;
}

else if(isset($url[0]) AND $url[0] == 'jeu' AND (!isset($url[1]) OR $url[1] == '')) { // si on a qu un /jeu 

	$title="Escape Game en cours";
	$call='pages/jeu.php';
	$footer="pages/inc/footer.php";
	$header=false;
}


else { // sinon, on ne connait pas

	$title='Page introuvable : erreur 404';
	$call='pages/404.php';
	$footer="pages/inc/footer.php";
	$header=true;
}


// Appel des différents éléments de la page

require_once('pages/inc/head.php');

if($header)
{
	require_once('pages/inc/header.php');
}

require_once($call);

require_once($footer);

?>
    