
<?php
include("coni.php");
?>
<html>
<head><title>Affichage par catégorie de produits</title></head>
<body>
<form action="AffProdTP3.php" method="post">
  <fieldset>
    <legend><b>Recherche par catégorie</b></legend>
    <label>Catégorie : </label><input type="text" name="Categorie" size="40" maxlength="256" /><br />
     <input type="submit" name="Chercher" value="Chercher"/>
  </fieldset>
    </form>
<?php
if (isset ($_POST['Chercher'])){
$Cat=$_POST['Categorie'];
$lien=connectMaBasi();
$sql="SELECT * FROM Produit WHERE Categorie LIKE '%$Cat%'" ;
$req = mysqli_query($lien,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
   if (!$req)
{
	echo "Lecture impossible";
} 
else
{       $nbcol=mysqli_num_fields($req);
	$nbmod=mysqli_num_rows($req);
	echo "<h3> Tous les $nbmod produits</h3>";
	echo "<table border=\"1\">";
	echo "<th>reference</th> <th>categorie</th> <th>designation</th> <th>Prix</th>";
	while ($ligne=mysqli_fetch_array($req))
	{
		echo "<tr>";
		
		for ( $i=0; $i<$nbcol; $i++)
		
		{
			echo "<td> $ligne[$i] </td>";
	}
	echo "</tr>";
	}
	echo "</table>";
	}
        }
mysqli_free_result ($req);
mysqli_close ();
?>
</body>
</html>