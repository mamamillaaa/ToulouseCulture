<?php
//------------------- les objets de l'application ----------------


//---------------------- les vues -------------------------------
// moteur de template pour les vues
require_once ("moteurtemplate.php");

// les models
//---------------------- les models -----------------------------


// ----------------------Les managers ---------------------------





// ------------------------------------------------------------------------------------
	if (isset($_GET["action"])) {
		$action = $_GET["action"]; 
		switch ($action) {
		
		case "accueil" : // accueil
			echo $twig->render('accueil.html.twig'); // viewer	
		break;
		
		}	
	}
	else {		
	
	echo $twig->render('accueil.html.twig'); 
	
	}


?>