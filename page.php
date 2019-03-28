<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php 
			$tab=array(1=>'un', 2=> 'deux', 3 => 'trois');
				foreach($tab as $valeur) {
					echo "$valeur \n";
				}
				foreach($tab as $cle => $valeur) {
					echo "$cle => $valeur \n";
				}
			?>
	</body>
</html>