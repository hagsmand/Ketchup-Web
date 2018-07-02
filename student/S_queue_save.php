<?php
session_start();
include("config.php");
$name = $_POST['name'];
$sit = $_POST['sit'];
$stuID = $_POST['stu_id'];
$course = $_POST['course_no'];

	if(isset($_POST['Submit'])) {

				 $insertSQL = "INSERT INTO queue (stu_id,stu_name,course_no,sit_po) VALUES ('$stuID','$name','$course','$sit')";
			   $insertQuery = mysqli_query($objCon,$insertSQL);

			 header("location:S_queue_button.php");
	}

	session_write_close();
	mysqli_close($objCon);
?>
