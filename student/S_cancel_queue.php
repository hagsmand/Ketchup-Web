<?php
session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_POST["stu_id"];

$sql = "DELETE FROM queue WHERE course_no = '$course' AND stu_id = '$stuID'";

if (mysqli_query($objCon,$sql)) {
    if($_SESSION["Status"] == "ADMIN"){
        header("location:T_queue.php");
    }
    else{
        header("location:S_queue.php");
    }
} else {
  echo "have some fucking error HERE, DAM";
}

session_write_close();
mysqli_close($objCon);
 ?>
