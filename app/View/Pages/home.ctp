<p>
<form action="" id="thematique" method="post">
Choissisez la thématique que vous souhaitez étudier...
<br>
<br>
<select name="thematique">
  <option value="">Sélectionner...</option>
  <option value="cognition">Cognition</option>
  <option value="ergonomie">Ergonomie</option>
  <option value="haptique">Haptique</option>
  <option value="homme">Homme</option>
  <option value="humain">Humain</option>
  <option value="immersion">Immersion</option>
  <option value="interaction">Interaction</option>
  <option value="interface">Interface</option>
  <option value="perception">Perception</option>
  <option value="présence">Présence</option>
  <option value="realite">Réalité</option>
  <option value="sens">Sens</option>
  <option value="sensoriel">Sensoriel</option>
  <option value="tactile">Tactile</option>
  <option value="virtuel">Virtuel</option>
  <option value="vision">Vision</option>
</select>
<br>
<br>
<input type="submit" value="Envoyer" />
<br>
<br>
</form>
<br>
<br>
Ou accéz directement au wiki : <a href="http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle" target="_blank">Réalité Virtuelle</a>
</p>
<?php
$thematique = $_POST['thematique'];

$doc = new DOMDocument;
		$doc->loadHTMLFile("http://localhost/WikiLearn/index.php/R%C3%A9alit%C3%A9_virtuelle");

		$paras = 
		$doc->getElementsByTagName('p');
			foreach ($paras as $para) {
				if (strpos($para->textContent, $thematique) !== FALSE) {
				echo $doc->saveXML($para);
				}
			}
?>

