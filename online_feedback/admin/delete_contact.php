<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	if (isset($con)) mysqli_query($con,"delete from contact where id='$info'");
	header('location:dashboard.php?info=contact');
?>