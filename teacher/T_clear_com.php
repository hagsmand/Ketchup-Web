<?php
session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_SESSION["stu_id"];

$sql = "DELETE FROM compettitive WHERE course_no = '$course'";

if (mysqli_query($objCon,$sql)) {
    echo "<script type = 'text/javascript'>
		alert('Reset Competition Complete');
		window.location.href ='T_utility.php';
		</script>";
} else {
    echo "have some fucking error HERE, DAM";
}

session_write_close();
mysqli_close($objCon);
?>
