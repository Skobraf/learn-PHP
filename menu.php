<html>
	<head>
		<title>helo</title>
	</head>
	<body>
		<?php 
			$nameErr = "";
			if(empty($_POST["name"])) {
				$nameErr = "Please enter a valid name";
				echo "$nameErr";
			}
		 ?>
		 <?php 
		 	function trim($data) {
		 		$data = trim($data);
		 		return $data;
		 		
		 	}
		  ?>
	</body>
</html>