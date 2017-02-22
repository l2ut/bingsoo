<?php
	require_once('required/connect.php');
	$id = $_user['iduser'];
	$sql = "SELECT * FROM user WHERE iduser='$id'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	while ($result = mysqli_fetch_assoc($query)) {
		if (isset($_POST['point'])){
		$sum = $result['point'];
	    $sum = $sum+10;
	    echo $sum;
		}
	}
	$sql = "UPDATE `user` SET point='$sum' WHERE iduser='$id'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
 ?>