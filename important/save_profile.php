<?php
	session_start();
include("config.php");

	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
        if($_SESSION["Status"] == "ADMIN")
        {
            echo "<script type = 'text/javascript'>
		alert('Password Not Match!');
		window.location.href ='T_edit_profile.php';
		</script>";
            exit();
        }
        else
        {
            echo "<script type = 'text/javascript'>
		alert('Your ID not correct! (must be 8 digit!)');
		window.location.href ='edit_profile.php';
		</script>";
            exit();
        }
	}


	$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword'])."',Name = '".trim($_POST['txtName'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);

	if($_SESSION["Status"] == "ADMIN")
	{
        echo "<script type = 'text/javascript'>
		alert('Edit complete!');
		window.location.href ='T_about.php';
		</script>";
	}
	else
	{
        echo "<script type = 'text/javascript'>
		alert('Edit complete!');
		window.location.href ='S_about.php';
		</script>";
	}
	
	mysqli_close($objCon);
?>
Password Not Match!
Your ID not correct! (must be 8 digit!)