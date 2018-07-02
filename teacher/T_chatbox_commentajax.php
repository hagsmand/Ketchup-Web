<?php
include ("config.php");
date_default_timezone_set("Asia/Bangkok");
$time = date("Y-m-d h:i:s");
session_start();
$stu_id = $_SESSION["stu_id"];
echo $stu_id;
$course = $_SESSION["course_no"];
$name = $_SESSION["Name"];

if(isset($_POST['user_comm']) && isset($_POST['user_name']) && !isset($_POST['abcd_name']))
{
    $comment=$_POST['user_comm'];
    $name=$_POST['user_name'];
    $strSQL = "INSERT INTO chat(stu_id,name,course_no,comment,post_time) VALUES('$stu_id','$name','$course','$comment','$time')";
    $objQuery = mysqli_query($objCon,$strSQL) ;

}
else
{
    $comment=$_POST['user_comm'];
    $k=$_POST['abcd_name'];
    $strSQL = "INSERT INTO chat(stu_id,name,course_no,comment,post_time) VALUES('$stu_id','$k','$course','$comment','$time')";
    $objQuery = mysqli_query($objCon,$strSQL) ;
}
session_write_close();
mysqli_close($objCon);
?>
