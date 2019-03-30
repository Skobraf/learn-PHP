<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<form name="tri" method="post" action="trier.php">
			<input type="text" name="clt1"/> <br/>
			<input type="text" name="clt2"/><br/>
			<input type="text" name="clt3"/><br/>
			<input type="submit" name="valider" value="Trier"/>
		</form>
		<?php 
			if(isset($_POST['valider'])){
				$clt1=$_POST['clt1'];
				$clt2=$_POST['clt2'];
				$clt3=$_POST['clt3'];
				$tab=array('client1'=>$clt1,'client2'=>$clt2,'client3'=>$clt3);
				$tablow = array_map('strtolower', $tab);
				array_multisort($tablow, SORT_ASC, SORT_STRING);
				echo "<table border=\"1\">";
				foreach($tablow as $cle => $valeur){
				echo "<tr>";
				echo '<th>'.$cle.'</th>';
				echo '<td>'.$valeur. '</br></td>';
				echo "</tr>";}
				echo "</table>";
				}
		 ?>
	</body>
</html>