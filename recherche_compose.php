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

<form action="recherche_compose_choix.php" id="compose_choix" method="post">

<select name="compose_choix">

<?php
ini_set('display_errors','off');

$compose = $_POST['compose'];

$table = "motcle_$compose"; 

$db = mysql_connect('localhost', 'scarolan', 'HF3nGjwy5CXyYYHc');

mysql_select_db('my_wiki',$db);

$sql = 'SELECT motscles FROM ' . $table . '';

$req = mysql_query($sql);

while($data = mysql_fetch_array($req))
    {
	$list = $data['motscles'];
	echo "<option>$compose $list</option>";
    }
	
mysql_close();

?>
</select>
<input type="submit" value="Envoyer" />
</form>
		</div>
	</div>
</body>
</html>