<?php
//ยกเลิกการใช้งาน
include ("config.php");
@session_start();
$course_no = $_SESSION["course_no"];

$strSQL = "SELECT * FROM subject WHERE course_no = $course_no ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$comment = $objResult["comment"];

echo $comment;

if($_SESSION["Status"] == "ADMIN")
{
   ?> <input type="button" value="done" onclick="window.location.href='T_Main.php'" /> <?php
}
else
{
    ?> <input type="button" value="done" onclick="window.location.href='S_Main.php'" /> <?php
}




mysqli_close($objCon);
?>