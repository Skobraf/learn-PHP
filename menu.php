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
				$insrtion = "INSERT INTO User(nom,prenom,email)
							VALUES('Abed','Ayoub', 'skobraf@gmail.com')";

					$connexion->exec($insrtion);
				echo 'Inserted!';
			}
			catch(PDOException $e){
				echo "Echec:" .$e->getMessage();
			}
		 ?>
	</body>
</html>