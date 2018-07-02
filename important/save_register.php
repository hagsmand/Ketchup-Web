<?php
	include("config.php");
	function alert($al){
		echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='register.php';
		</script>";

		}
$strSQL = "SELECT course_no FROM subject WHERE subject = '".$_POST['subject']."'AND sec_no  = '".$_POST['sec']."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$num = $objResult["course_no"];



	if(trim($_POST["txtUsername"]) == "")
	{
		alert("Please input Username");

	}

	if(trim($_POST["txtPassword"]) == "")
	{
		alert("Please input Password!");

	}
	if(trim($_POST["txtName"]) == "")
	{
		alert("Please input Name!");

	}
	if(trim($_POST["stu_id"]) == "")
	{
		alert("Please input student id!");

	}
	if(strlen(trim($_POST["stu_id"]))!= 8)
	{
		alert("student id incorrect");

	}
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		alert("Password not Match!");

	}


	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."'or stu_id = '".mysqli_real_escape_string($objCon,$_POST['stu_id'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		alert("User already exists!");

	}
	else
	{
            $strSQL = "INSERT INTO member (Username,Password,Name,Status,stu_id,sit_po,online,login_time,logout_time,course_no) VALUES ('".$_POST["txtUsername"]."','".$_POST["txtPassword"]."',
		'".$_POST["txtName"]."','".$_POST["ddlStatus"]."','".$_POST["stu_id"]."','0','0','0000-00-00 00:00:00','0','$num')";
            $objQuery = mysqli_query($objCon,$strSQL);

		echo "<script type = 'text/javascript'>
		alert('Register complete!');
		window.location.href ='login.php';
		</script>";


	}

	mysqli_close($objCon);
?>
