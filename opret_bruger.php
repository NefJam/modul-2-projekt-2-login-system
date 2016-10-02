<?php require_once 'includes/dbcon.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Uge 2 - opret bruger</title>
</head>
<body>





<h1>Opret bruger</h1>

	<form action="magi_opret_bruger.php" method="POST">
		<fieldset>
			<p>Username: </p>
				<input type="text" name="username" placeholder="Username"><br>
		    <p>Password: </p>
		    	<input type="text" name="password" min="6" max="50" placeholder="Password"><br><br>
		    	<input type="submit" name="submit" value="Opret bruger" /><br>
		</fieldset>
</form>

<a href="login.php">Login</a>







</body>
</html>