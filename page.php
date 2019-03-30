<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php 
			$tab= [];
			for ($i=0; $i < 10; $i++) { 
				$tab["User".$i] = $i;
			}
			foreach ($tab as $key => $value) {
				echo "$key ... $value";
			}
		 ?>
		 </ul>
	</body>
</html>