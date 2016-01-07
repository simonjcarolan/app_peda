<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/semwiki/app/webroot/css/cake.generic.css"/>
</head>
<body>
	<div id="container">
		<div id="header">REASON : Ressources Educatives Adaptatives Sémantiques Ouvertes et Nomades</div>
		<div id="content"><h1>Rechercher</h1>
<?php
$association = $_POST['association'];
?>

<form action="recherche_association_choix.php" id="association_choix" method="post">

<select name="association_choix">

<?php
ini_set('display_errors','off');

$association = $_POST['association'];

$table = "motcle_$association"; 

$db = mysql_connect('localhost', 'scarolan', 'HF3nGjwy5CXyYYHc');

mysql_select_db('my_wiki',$db);

$sql = 'SELECT motcle FROM motcle';

$req = mysql_query($sql);

while($data = mysql_fetch_array($req))
    {
	$list = $data['motcle'];
	echo "<option>$association et $list</option>";
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