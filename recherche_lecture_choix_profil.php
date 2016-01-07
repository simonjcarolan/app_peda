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
$lecture = $_POST['lecture'];
?>

<form action="recherche_lecture_choix_contexte.php" id="choix_profil" method="post">

<select name="choix_profil">

<?php
ini_set('display_errors','off');

$lecture = $_POST['lecture'];

$table = "profil"; 

$db = mysql_connect('localhost', 'scarolan', 'HF3nGjwy5CXyYYHc');

mysql_select_db('my_wiki',$db);

$sql = 'SELECT profil FROM user_profil';

$req = mysql_query($sql);

while($data = mysql_fetch_array($req))
    {
	$liste = $data['profil'];
	echo "<option>$lecture : Je suis $liste</option>";
    }
	
mysql_close();

?>
</select>
<br />
<br />
<input type="submit" value="Definir profil" />
</form>
    
		</div>
	</div>
</body>
</html>