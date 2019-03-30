<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php 
			$tab = array("Ayoub"=>array("abed", "ahfir"), "Khalid"=>array("chigan", "rachidia"));
		 ?>
		 <ul>
		 	<?php 
		 		$personnes = array(
					"nom1"=>array("prenom 1"=>"Ali","ville 1"=>"Rabat","age 1"=>"35"),
					"nom2"=>array("prenom 2"=>"Ahmed","ville 2"=>"Casa","age 2"=>"22"),
					"nom3"=>array("prenom 3"=>"Mourad","ville 3"=>"Kenitra","age 3"=>"47"));

					echo "<table border=\"1\">";
					foreach($personnes as $cle=>$tab)
					{
					echo "<tr>";
					echo '<th>'.$cle.'</th>';
					 foreach($tab as $key=>$valeur)
					 {
					 echo "<td> $key : <b> $valeur </b></br></td>";
					 }
					 echo "</tr>";
					}
					echo "</table>";
		 	 ?>
		 </ul>
		 </ul>
	</body>
</html>