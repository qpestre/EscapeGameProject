
<?php

if (isset($_GET['url'])) { //Si URL non vide

	$url = explode('/', $_GET['url']); // Recuperer les parametres entre les slashs

} else {
	$url = ['accueil']; // si url vide charger l accueil
}

$website_name = 'Escape Game';

if (isset($url[0]) AND $url[0] == 'accueil' AND (!isset($url[1]) OR $url[1] == '')) { // si on a qu un /accueil 

	$title="Escape Game : à l\"aventure";
	$call='pages/accueil.php';
}


else { // sinon, on ne connait pas

	$title='Page introuvable : erreur 404';
	$call='pages/404.php';
}

// Appel des différents éléments de la page

require_once('pages/inc/head.php');
require_once('pages/inc/header.php');

require_once($call);
require_once('pages/inc/footer.php');

?>
    