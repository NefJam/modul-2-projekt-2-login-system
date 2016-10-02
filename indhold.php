
<?php 
session_start();

if(!isset($_SESSION['uid']))
{ 
	header("location: login.php");
 }else{
	echo '<h1>Velkommen til hemmeligheden</h1>';
	echo '<a href="logout.php">log ud</a>';
}
?>



