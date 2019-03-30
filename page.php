<!doctype html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>l'instruction include</title>
	</head>
	<body>
		<form action="<?php ehco $HTTP_SERVER_VARS['PHP_SELF']; ?>" method="post">
			Name: <input type="text" name="personal[name]">
			Email: <input type="text" name="personal[email]">
			Beer: <br>
			<select name="vin[]" multiple>
				<option value=" value="bordeaux">Bordeaux</option>
				<option value=" value="paris">paris</option>
				<option value=" value="malaga">malaga</option>
			</select><br>
			<input type="hidden" name="action" value="submitted">
			<input type="submit" name="submit" value="submit me!">
		</form>
	</body>
</html>