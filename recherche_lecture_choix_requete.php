<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/semwiki/app/webroot/css/cake.generic.css"/>
</head>
<body>
	<div id="container">
		<div id="header">REASON : Ressources Educatives Adaptatives Sémantiques Ouvertes et Nomades</div>
		<div id="content">
<?php
	$requete = $_POST['choix_contexte'];

	$partie = explode(" : Je suis ", $requete);

	$requete_motcle = $partie[0];
	$requete_profil = $partie[1];
	$requete_contexte = $partie[2];
?>

<?php
	if (($requete_profil == "etudiant_debutant")){
		// chercher enfant
		// ajouter mots-clés "théorie/définition"
		$mot_supp_1 = "théor";
		$mot_supp_2 = "défini";
	}
	else {
		if (($requete_profil == "etudiant_intermediaire")){
			// chercher enfant et parent
			$mot_supp_1 = "théor";
			$mot_supp_2 = "   ";
		}
			else {
				if (($requete_profil == "etudiant_avance")){
					// chercher parent
					$mot_supp_1 = " ";
					$mot_supp_2 = " ";
				}
					else {
						if (($requete_profil == "chercheur")){
							//chercher parent
							//ajouter mots-clés "" et ""
							$mot_supp_1 = "théor";
							$mot_supp_2 = "technique";
						}
							else{
								if (($requete_profil == "industriel")){
									//chercher enfant et parent
									//ajouter mots-clés "pratique" et "outil"
									$mot_supp_1 = "technique";
									$mot_supp_2 = "outil";
								}
							}
					}
			}
	}
					
?>

<?php
	if ($requete_contexte == "en salle de classe"){
	$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
	$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

	$paras = $doc->getElementsByTagName('p');
	echo "<h1><b><center>Contenu avec les mot-clés : <u>$requete_motcle</u></center></b></h1>";
		foreach ($paras as $para) {
			if ((strpos($para->textContent, $requete_motcle) !== FALSE) && (strlen($para->textContent) <= 1000) && ((strpos($para->textContent, $mot_supp_1) !== FALSE) || (strpos($para->textContent, $mot_supp_2) !== FALSE))){	
				echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
				echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
			}
		}
	}
	else {
		if ($requete_contexte == "en train de reviser"){
		$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
		$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

		$paras = $doc->getElementsByTagName('p');
		echo "<h1><b><center>Contenu avec les mot-clés : <u>$requete_motcle</u></center></b></h1>";
			foreach ($paras as $para) {
				if ((strpos($para->textContent, $requete_motcle) !== FALSE) && (strlen($para->textContent) <= 1000)){	
					echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
					echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
				}
			}	
		}
		else {
			if ($requete_contexte == "en autonomie (temps limite)"){
		$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
		$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

		$paras = $doc->getElementsByTagName('p');
		echo "<h1><b><center>Contenu avec les mot-clés : <u>$requete_motcle</u></center></b></h1>";
			foreach ($paras as $para) {
				if ((strpos($para->textContent, $requete_motcle) !== FALSE) && (strlen($para->textContent) <= 1000)){	
					echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
					echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
				}
			}	
			}
			else {
				if ($requete_contexte == "au poste de travail") {
				$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
				$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

				$paras = $doc->getElementsByTagName('p');
				echo "<h1><b><center>Contenu avec les mot-clés : <u>$requete_motcle</u></center></b></h1>";
					foreach ($paras as $para) {
						if ((strpos($para->textContent, $requete_motcle) !== FALSE) && (strpos($para->textContent, $mot_supp_1) !== FALSE)){	
							echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
							echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
						}
					}
				}
				else {
				//contexte = "en autonomie (temps indefini)
					$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
					$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

					$paras = $doc->getElementsByTagName('p');
					echo "<h1><b><center>Contenu avec les mot-clés : <u>$requete_motcle</u></center></b></h1>";
						foreach ($paras as $para) {
							if ((strpos($para->textContent, $requete_motcle) !== FALSE) && ((strpos($para->textContent, $mot_supp_1) !== FALSE) || (strpos($para->textContent, $mot_supp_2) !== FALSE))){	
								echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
								echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
							}
						}
				}
			}
		}
	}
?>
		</div>
	</div>
</body>
</html>