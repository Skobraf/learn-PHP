<?php
if(isset($_COOKIE['nom']) AND isset($_COOKIE['pass']))
{
$login="dounia";
$motpass="abcd";
$nom=$_COOKIE['nom'];
$pass=$_COOKIE['pass'];
//Vérification et création du contenu personnalisé
if($nom==$login AND $pass==$motpass)
{
$message= "<h1>BONJOUR ".$nom."</h1>";
$contenu="<p> Votre contenu</p>";
}
else
{
	header('location:saisieinfo.php');
}
}
else
{
	header('location:saisieinfo.php');
}

?>
<html>
<head>
<title>Accès réservé au site</title>
</head>
<body>
<?php
echo $message;
echo $contenu;
?>
</body>
</html>