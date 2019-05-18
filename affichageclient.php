<?php
include("coni.php");
?>
<html>
<head><title>TOUTES LES INFOS SUR NOS CLIENTS</title></head>
<body>
<?php
$lien=connectMaBasi();
$sql = 'SELECT * FROM Client';
$req = mysqli_query($lien,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
   if (!$req)
{
	echo "Lecture impossible";
} 
else
{       
	echo "<table border=\"1\">";
	echo "<th>ID</th> <th>Nom</th> <th>Tel </th> <th>Ville</th>  <th>Adresse</th>";
	while ($ligne=mysqli_fetch_array($req))
	{
		echo "<tr>";
		
		for ( $i=0; $i<5; $i++)
		
		{
			echo "<td> $ligne[$i] </td>";
	}
	echo "</tr>";
	}
	echo "</table>";
	}
mysqli_free_result ($req);
mysqli_close ();
?>
</body>
</html>