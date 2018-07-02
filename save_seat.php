<?php
  session_start();
  include("config.php");

  $strSQL = "UPDATE member SET Sit = '".($_POST['sitPosition'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);

	mysqli_close($objCon);

  	header("location:user_page.php");
?>
