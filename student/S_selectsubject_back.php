<?php
include ("config.php");
session_start();

$subject = $_POST['Subject'];
$sec = $_POST['Section'];
$stu_id = $_SESSION["stu_id"];
$status = $_SESSION["Status"];
$name = $_SESSION["Name"];

echo $subject;
echo $sec;
echo $stu_id;
echo $status;
echo $name;

$strSQL = "SELECT course_no FROM subject WHERE subject = $subject AND sec_no  = $sec" ;
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$num = $objResult["course_no"];
echo $num ;

$strSQL = "SELECT * FROM member WHERE stu_id = $stu_id AND course_no = $num" ;
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult){

  $_SESSION["course_no"] = $num;
  $_SESSION["UserID"] = $objResult["UserID"];
  echo $_SESSION["course_no"];
    if($status == "ADMIN"){
      echo "<script type = 'text/javascript'>
      window.location.href ='T_Main.php';
      </script>";
    }else {
      echo "<script type = 'text/javascript'>
      window.location.href ='S_Main.php';
      </script>";
    }

}else {

  echo "<script type = 'text/javascript'>
  alert('You are not in this class');
  window.location.href ='S_selectsubject.php';
  </script>";
  exit();
}
session_write_close();
mysqli_close($objCon);
