<?php
session_start();
//Nom et password associé autorisant l'accès au site
//En pratique ils proviennent d'une base de données
$login="dounia";
$motpass="abcd";
//Récupération des valeurs saisies
$nom=$_POST['nom'];
$pass=$_POST['pass'];
//Vérification
if($nom==$login AND $pass==$motpass)
{
$_SESSION['nom']=$nom;
$_SESSION['pass']=$pass;
//Redirection vers la page à accès réservé

header('location:session.php');
}
else
{
//Redirection vers la page de saisie du code

header('location:saisiesession.php');
}
?>