<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php 
			$a=1;
			function foo() {
				global $a; // pour accéder a la variable globale
				 $a + 1;
			}
			echo $a;
		 ?>
	</body>
</html>