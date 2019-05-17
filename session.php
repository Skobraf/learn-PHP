<?php
session_start();
//création du contenu personnalisé

$message= "<h1>BONJOUR ".$_SESSION['nom']."</h1>";
echo $message;

?>