<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<?php
			$tab = array('Faculté' =>"FacLink", 'Université'=> "UnivLin"); 
		 ?>
		 <ul>
		 	<?php 
		 		foreach($tab as $key => $value) {
		 			echo "<li><a href=$key> $key </a></li>";
		 		}
		 	 ?>
		 </ul>
	</body>
</html>