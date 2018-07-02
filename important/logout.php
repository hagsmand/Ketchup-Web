<?php
	include("config.php");
	date_default_timezone_set("Asia/Bangkok");
	$time = date("Y-m-d h:i:s");
	session_start();
	$strSQL = "UPDATE member SET online = '0' WHERE stu_id = '".$_SESSION["stu_id"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$strSQL = "UPDATE member SET logout_time = '$time' WHERE stu_id = '".$_SESSION["stu_id"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	session_destroy();

	mysqli_close($objCon);
	header("location:login.php");


?>
