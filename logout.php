<?php
	session_start();
	session_destroy();
	header('location:splashpage.php');
	exit();
?>