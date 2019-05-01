<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<form action="page.php" method="POST">
			<input type="text" name="input1">
			<input type="text" name="input2">
			<input type="text" name="input3">
			<input type="text" name="trier" value="trier">
		</form>
		<?php 
			if(isset($_POST['trier'])) {
				$input1 = $_POST['input1'];
				$input2 = $_POST['input2'];
				$input3 = $_POST['input3'];
				$tab = array('client1'=>$input1, 'client2'=>$input2, 'client3'=>$input3);
				$array_lowercase = array_map('strlower', $tab);
				array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $tab);
				echo "<table border=\"1\">";
				foreach($tab as $cle => $value) {
					echo "<tr><th>".$cle."</th>";
					echo "<td>".$value."</br></td><tr>";
				}
				echo "</table>";
			}
		 ?>
	</body>
</html>