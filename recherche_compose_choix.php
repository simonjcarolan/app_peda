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
$compose_choix = $_POST['compose_choix'];

	$doc = new DOMDocument();/*<?xml version="1.0" encoding="UTF-8"?>*/
		$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

		$paras = 
		$doc->getElementsByTagName('p');
			echo "<h1><b><center>Contenu avec le mot-composé : <u>$compose_choix</u></center></b></h1>";
			foreach ($paras as $para) {
				if (strpos($para->textContent, $compose_choix) !== FALSE){
				echo $doc->saveXML($para);/*<?xml version="1.0" encoding="UTF-8"?>*/
				echo "<center><a href='http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle#' target='_blank'>Voir version complète</a></center><br />";
				}
			}
?>
		</div>
	</div>
</body>
</html>