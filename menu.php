<html>
	<head>
		<title>helo</title>
	</head>
	<body>
		<?php 
			$serveur = "localhost";
			$login = "root";
			$pass = "";

			try{
				$connextion = new PDO("mysql:host=$serveur",$login,$pass);
				$connextion->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$connextion ->exec("CREATE DATABASE db_name");
				echo 'Created!';
			}
			catch(PDOException $e){
				echo "Echec:" .$e->getMessage();
			}
		 ?>
	</body>
</html>