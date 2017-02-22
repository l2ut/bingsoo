<?php
	require_once('required/connect.php');
	$_mail = $_POST['mail'];
	$_pass = $_POST['pass'];

	$sql = "SELECT * FROM user WHERE email='$_mail' AND password='$_pass'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	$num = mysqli_num_rows($query);
	if($num==1) {
		unset($_SESSION['token_login']);
		$result = mysqli_fetch_assoc($query);
		$_SESSION['token_login'] = $result['email'];
		header('location:index.php');
			exit();
	} else {
		echo '<script>alert("Email หรือ Password ไม่ตรงกัน");</script>';
		header('location:signin.php');
		exit();
	}
?>