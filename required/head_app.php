<?php 
	$id = $_user['iduser'];
	$sql = "SELECT * FROM user WHERE iduser='$id'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	while ($result = mysqli_fetch_assoc($query)) {
 ?>
<div class="head_app">
	<h1>Bingsoo Heaven</h1>
	<div class="profile_img"></div>
	<div class="profile_name"><?php echo $result['name']." ".$result['lastname']; ?></div>
</div>
<?php } ?>