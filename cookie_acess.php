<?php 
$login = "ayoub";
$motpass ="1234";
// Recuperation des donné saisie
$nom = $_POST['nom'];
$pass = $_POST['pass']
//Verification
if($nom == $login && $pass == $motpass) {
	//Ecreture des cookies
	$expir = time() + 3600;
	setcookie("nom", $nom, $expir);
	setcookie("pass",$pass, $expir)
	// Redirection vers la page a acces reserve
	header('location:cookietest.php');
 }
 else
 {
 	//redirectoin vers la page de saisie du code
 	header('location:sasieinfo.php');
 }
?>