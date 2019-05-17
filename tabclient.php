<?php
include("coni.php");
?>
<html>
<head><title>Table Client</title></head>
<body>
<form action="tabclient.php" method="post">
<!-- Premier groupe de composants-->
  <fieldset>
    <legend><b>Client</b></legend>
    <label>ID : </label><input type="text" name="ID" size="40" maxlength="256" /><br />
    <label>Nom : </label><input type="text" name="Nom" size="40" maxlength="256" /><br />
    <label>Tel : </label><input type="text" name="Tel" size="40" maxlength="256" /><br />
    <label>Ville : </label><input type="text" name="Ville" size="40" maxlength="6" /> <br />
    <textarea name="Adresse" cols="50" rows="4" onclick="this.value=''">Adresse
    </textarea>
    </select>
    <br />
    <input type="submit" name="valider" value="Enregistrer"/>
        <input type="submit" name="supprimer" value="Supprimer"/>
        <input type="submit" name="modifier" value="Modifier"/>
  </fieldset>
    </form>
    
<?php
if (isset ($_POST['valider'])){
$Nom=$_POST['Nom'];
$Tel=$_POST['Tel'];
$Ville=$_POST['Ville'];
$Adresse=$_POST['Adresse'];

$lien=connectMaBasi();
$sql = 'INSERT INTO Client VALUES("","'.$Nom.'",'.$Tel.',"'.$Ville.'","'.$Adresse.'")';
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error());
mysqli_close();


}

//suppression des données
if (isset ($_POST['supprimer'])){
$Nom=$_POST['Nom'];
$lien=connectMaBase();
$sql = 'DELETE FROM Client WHERE Nom="'.$Nom.'"';
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error());
// on ferme la connexion
mysqli_close();
}    


//MAJ des données
if (isset ($_POST['modifier'])){
$ID=$_POST['ID'];
$Nom=$_POST['Nom'];
$lien=connectMaBasi();
$sql = 'UPDATE Client SET Nom="'.$Nom.'" WHERE ID="'.$ID.'"';
mysqli_query ($lien,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error());
// on ferme la connexion
mysqli_close();
}    
?>
    </body>
</html>