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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body style="background-image: url(image/bg.jpg);">
		<div class="head_app"style="height:37px;">
			<a href="point.php"><i class="fa fa-angle-left fa-2x" style="float:left;margin-left:10px;"></i></a><h1 style="width:94%">Bingsoo Heaven</h1>
		</div>
		<div class="content"style="top:40px; background-color:transparent;">
			<p style="height:215px;">รับฟรี<br>Bingsoo 1 ถ้วย</p>
			<h3 style="text-align: center;font-weight: 500;font-size: 25;">โปรดแสดงหน้านี้ให้พนักงาน</h3>
		</div>
		<?php 
			$id = $_user['iduser'];
			$sql = "SELECT * FROM user WHERE iduser='$id'";
			$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
			while ($result = mysqli_fetch_assoc($query)) {
				if (isset($_POST['gift'])){
				$sum = $result['point'];
			    $sum = $sum-100;
			    if ($sum<0) {
			    	echo "<script>alert('คะแนนไม่เพียงพอ'); location.href='point.php';</script>";
					exit();
			    }
				}
			}
			$sql = "UPDATE `user` SET point='$sum' WHERE iduser='$id'";
			$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));

		 ?>
	</body>
</html>