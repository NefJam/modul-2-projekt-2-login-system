<?php  
session_start();
require_once 'includes/dbcon.php'; 

	if (isset($_POST['login_submit'])) //Hvis der bliver trykken på login knappen
		{
			$un 	= filter_input(INPUT_POST, 'username', FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[A-Za-z\\s]+/"))) or die('Username not valid!');
			$pw 	= filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{6,50}/"))) or die('Password must be between 6 and 50 characters!');

			$sql = 'SELECT username, password FROM bruger WHERE username = ?'; 
	
			$stmt = $link->prepare($sql);
			$stmt->bind_param('s', $un);
			$stmt->execute();
			$pwHash = password_hash($pw, PASSWORD_DEFAULT);
			
			
		    		

			
				if (password_verify($pw, $pwHash)) //tjekker om password matcher i databasen
					{
					    echo 'Password is valid!';
					    $_SESSION['uid'] = $un;
					    header('location: indhold.php'); // sender brugeren videre
					    		
					} 
				else 
					{
					    echo 'Invalid password!';
					    echo '<a href="opret_bruger.php">Gå til login-siden</a>';
					}
			
		}


		
?>