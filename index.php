<?php
	require_once('required/connect.php');
	if (!isset($_SESSION['token_login'])){
		header('location:splashpage.php');
		exit();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BINGSOO HEAVEN</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="font/stylesheet.css">
		<link rel="stylesheet" href="font/stylesheet2.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<?php require_once('required/head_app.php'); ?>
			<div class="content">
				<div class="promo"style="    background-image: url(image/proSm.jpg);
    background-repeat: no-repeat;"></div>
				<div class="promo"style="    background-image: url(image/proSm2.jpg);
    background-repeat: no-repeat;"></div>
				<div class="promo"style="    background-image: url(image/proSm3.jpg);
    background-repeat: no-repeat;"></div>
				<div class="promo"style="    background-image: url(image/proSm.jpg);
    background-repeat: no-repeat;"></div>
				<div class="promo"style="    background-image: url(image/proSm2.jpg);
    background-repeat: no-repeat;"></div>
				<div class="promo"style="    background-image: url(image/proSm3.jpg);
    background-repeat: no-repeat;"></div>
			</div>
			<?php require_once('required/menu_bar.php'); ?>
		</div>
	</body>
</html>