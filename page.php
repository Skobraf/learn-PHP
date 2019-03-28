<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php 
			function test_static() {
				static $a=0;
				echo $a;
				$a++;
			}
			// la variable statique ne perd pas sa valeur quand on sort d'une fonction
		 ?>
	</body>
</html>