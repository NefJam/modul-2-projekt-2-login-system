 <?php require_once 'includes/dbcon.php'; ?>


 <h1>Login</h1>

	<form action='magi_login.php' method="POST">
		<fieldset>
			<p>Username: </p>
				<input type="text" name="username" placeholder="Username"><br>
		    <p>Password: </p>
		    	<input type="text" name="password" min="6" max="50" placeholder="Password"><br><br>
		    	
		    	<input type="submit" name="login_submit" value="Login" /><br>
		</fieldset>
	</form>

<a href="opret_bruger.php">Opret bruger</a>






















