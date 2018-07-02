<?php
@session_start();
include("config.php");
function alert($al){
    echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='login.php';
		</script>";
    exit();
}
if($_SESSION['UserID'] == "")
{
    alert("Please Login!");
}
$course_no = $_SESSION["course_no"];
$comment =  $_POST["txtComment"];

$strSQL = "UPDATE subject SET comment = '$comment' WHERE course_no = $course_no ";
$objQuery = mysqli_query($objCon,$strSQL);

echo "<script type = 'text/javascript'>
		alert('Announcement complete!');
		window.location.href ='T_about.php';
		</script>";

mysqli_close($objCon);
?>
