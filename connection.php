
<?php 
	//connection

	$bd = mysqli_connect('localhost', 'root', '', 'bookstore');

	// variable pour inserction

	$nomClient = mysql_real_escape_string($_POST['nom']);
	$prenomClient = mysql_real_escape_string($_POST['prenom']);
	$adressClient = mysql_real_escape_string($_POST['adress']);
	$emailClient = mysql_real_escape_string($_POST['email']);

	// requete d'insertion
	if($bd) {
		mysqli_autocommit($bd, FALSE);
		$insert1 = INSERT INTO 'clients'('nom_client', 'prenom_client', 'adress_client', 'email_client') VALUES ('$nomClient', '$prenomClient', '$adressClient', '$emailClient');
		$ordre = mysqli_prepare($bd, $insert1) or die(mysql_error($bd));
		if (mysqli_stmt_execute($ordre)) {
			echo " Client Inseré";
			mysqli_commit($bd);
			}
			mysqli_stmt_free_result($ordre);
			mysqli_close($bd);
		}
		else 
			echo "faild to connect";
 ?>