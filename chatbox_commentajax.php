<?php
include ("config.php");
session_start();
$stu_id = $_SESSION["stu_id"];
echo $stu_id;
$course_no = $_SESSION["course_no"];

if(isset($_POST['user_comm']) && isset($_POST['user_name']) && !isset($_POST['abcd_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
    $strSQL = "INSERT INTO chat (stu_id,name,comment,post_time,course_no) VALUES('$stu_id','$name','$comment',CURRENT_TIMESTAMP ,'$course_no')";
    $objQuery = mysqli_query($objCon,$strSQL);

}
else
{
  $comment=$_POST['user_comm'];
  $k=$_POST['abcd_name'];
    $strSQL = "INSERT INTO chat(stu_id,name,comment,post_time,course_no) VALUES('$stu_id','$k','$comment',CURRENT_TIMESTAMP ,'$course_no')";
    $objQuery = mysqli_query($objCon,$strSQL);
}
session_write_close();
mysqli_close($objCon);
?>
