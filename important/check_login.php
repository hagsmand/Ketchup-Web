<?php
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$time = date("Y-m-d h:i:s");
	function alert($al){
		echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='login.php';
		</script>";
		exit();
	}

        include("config.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		alert("Username and Password Incorrect!");

	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["stu_id"] = $objResult["stu_id"];
			$_SESSION["Status"] = $objResult["Status"];
			$_SESSION["Name"] = $objResult["name"];

        $strSQL = "UPDATE member SET online = '1' WHERE stu_id = '".$_SESSION["stu_id"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $strSQL = "UPDATE member SET login_time = '$time' WHERE stu_id = '".$_SESSION["stu_id"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);

        session_write_close();

			if($objResult["Status"] == "ADMIN")
			{
				header("location:T_selectsubject.php");
			}
			else
			{
				header("location:S_selectsubject.php");
			}
	}
	mysqli_close($objCon);

?>
