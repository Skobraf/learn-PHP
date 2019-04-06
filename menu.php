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
				$requete = $connexion->prepare("INSERT INTO User(nom,prenom,email)
							VALUES(:nom,:prenom,:email)"
						);

					$requete->bindParam(':nom',$nom);
					$requete->bindParam(':prenom',$prenom);
					$requete->bindParam(':email',$email);

					$nom = "Abed";
					$prenom = "Ayoub";
					$email = "ayoub@gmail.com";
					$requete->execute();
				echo 'Inserted!';
			}
			catch(PDOException $e){
				echo "Echec:" .$e->getMessage();
			}
		 ?>
	</body>
</html>