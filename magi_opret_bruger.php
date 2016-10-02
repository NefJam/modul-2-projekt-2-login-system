<?php

	require_once 'includes/dbcon.php';
	
	

	
	$un 	= filter_input(INPUT_POST, 'username', FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[A-Za-z\\s]+/"))) or die('Username not valid!');
	$pw 	= filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{6,50}/"))) or die('Password must be between 6 and 50 characters!');
	
	$pwHash = password_hash($pw, PASSWORD_DEFAULT);
		
	$sql = 'INSERT INTO bruger (username, password) VALUES (?, ?)';

	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pwHash);
	$stmt->execute();
?>

 <p>Tak for din tilmelding!</p>

 <a href="login.php">Gå til login-siden</a>