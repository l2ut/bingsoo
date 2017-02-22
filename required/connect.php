<?php 
	session_start();

	$servername = "mysql.hostinger.in.th";
	$username = "u245655123_bs";
	$password = "a54NLvRv4Jns";
	$dbname = "u245655123_bs";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	if (isset($_SESSION['token_login'])) {
		$email = $_SESSION['token_login'];
		$sql = "SELECT * FROM `user` WHERE `email` LIKE '%$email%'";
		$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
		$result = mysqli_fetch_assoc($query);
		$_user = $result;
	}
 ?>
