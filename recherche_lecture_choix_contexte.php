<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/semwiki/app/webroot/css/cake.generic.css"/>
</head>
<body>
	<div id="container">
		<div id="header">REASON : Ressources Educatives Adaptatives Sémantiques Ouvertes et Nomades</div>
		<div id="content">
<h1>Rechercher</h1>
<?php
$profil = $_POST['choix_profil'];
$partie = explode(" : Je suis ", $profil);
$requete_profil = $partie[1];
?>

<form action="recherche_lecture_choix_requete.php" id="choix_contexte" method="post">

<select name="choix_contexte">

<?php
ini_set('display_errors','off');

$profil = $_POST['choix_profil'];

$table = "user_contexte_$requete_profil"; 

$db = mysql_connect('localhost', 'scarolan', 'HF3nGjwy5CXyYYHc');

mysql_select_db('my_wiki',$db);

$sql = "SELECT contexte FROM user_contexte_$requete_profil";

$req = mysql_query($sql);

while($data = mysql_fetch_array($req))
    {
	$liste = $data['contexte'];
	echo "<option>$profil : Je suis $liste</option>";
    }
	
mysql_close();

?>
</select>
<br />
<br />
<input type="submit" value="Definir contexte" />
</form>
		</div>
	</div>
</body>
</html>