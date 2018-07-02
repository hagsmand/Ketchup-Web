<?php
@session_start();
function alert($al){
    echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='add_subject.php';
		</script>";
    exit();
}
include ("config.php");
$stuid = $_SESSION["stu_id"];
$sql = "SELECT stu_id,Username,Password,name,Status FROM member WHERE UserID ='".$_SESSION["UserID"]."'";
$result = mysqli_query($objCon, $sql);
$row = mysqli_fetch_assoc($result);
$stu_id =$row["stu_id"];
$username =$row["Username"];
$password = $row["Password"];
$name =$row["name"];
$status  =$row["Status"];


$strSQL = "SELECT course_no FROM subject WHERE subject = '".$_POST['subject']."'AND sec_no  = '".$_POST['sec']."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$num = $objResult["course_no"];
echo $num;
$strSQL = "SELECT * FROM member WHERE stu_id = '$stuid' AND course_no = '$num'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult)
{
   alert("You are already register this subject");

}
else
{
    $strSQL = "INSERT INTO member (Username,Password,name,Status,stu_id,sit_po,online,login_time,logout_time,course_no) VALUES ('$username','$password','$name','$status','$stu_id','0','0','0000-00-00 00:00:00','0','$num')";
    $objQuery = mysqli_query($objCon,$strSQL);
    alert("complete");



}