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
				$connextion = new PDO("mysql:host=$serveur;dbname=test",$login,$pass);
				$connextion->setAttribute(PDO::AFTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$codesql = "CREATE TABLE User(
					id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					nom VARCHAR(50),
					prenom VARCHAR(50),
					email VARCHAR(70)
					)";
					$connexion->exec($codesql);
				echo 'Created!';
			}
			catch(PDOException $e){
				echo "Echec:" .$e->getMessage();
			}
		 ?>
	</body>
</html>