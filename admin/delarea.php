<?php
	include('../connection.php');
	$id=$_GET['id'];//query string value fetch
	$sql="delete from tbl_area where area_id=$id";
	mysqli_query($con,$sql);
	header("Location:viewarea.php");
?>
