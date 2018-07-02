<?php
session_start();

include ("config.php");
$strSQL = "SELECT * FROM time WHERE stu_id = '".$_SESSION["stu_id"]."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{

$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','mon','".$_POST['Time_start1']."','".$_POST['Time_stop1']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','tue','".$_POST['Time_start2']."','".$_POST['Time_stop2']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','wed','".$_POST['Time_start3']."','".$_POST['Time_stop3']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','thu','".$_POST['Time_start4']."','".$_POST['Time_stop4']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','fri','".$_POST['Time_start5']."','".$_POST['Time_stop5']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','sat','".$_POST['Time_start6']."','".$_POST['Time_stop6']."')";
$objQuery = mysqli_query($objCon,$strSQL);
$strSQL = "INSERT INTO time(stu_id,day,time_str,time_end) VALUES('".$_SESSION["stu_id"]."','sun','".$_POST['Time_start7']."','".$_POST['Time_stop7']."')";
$objQuery = mysqli_query($objCon,$strSQL);
}else{
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start1']."' ,time_end = '".($_POST['Time_stop1'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'mon' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start2']."' ,time_end = '".($_POST['Time_stop2'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'tue' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start3']."' ,time_end = '".($_POST['Time_stop3'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'wed' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start4']."' ,time_end = '".($_POST['Time_stop4'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'thu' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start5']."' ,time_end = '".($_POST['Time_stop5'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'fri' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start6']."' ,time_end = '".($_POST['Time_stop6'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'sat' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $strSQL = "UPDATE time SET time_str = '".$_POST['Time_start7']."' ,time_end = '".($_POST['Time_stop7'])."' WHERE stu_id = '".$_SESSION["stu_id"]."' AND day = 'sun' ";
    $objQuery = mysqli_query($objCon,$strSQL);

}

session_write_close();
mysqli_close($objCon);

header("location:Teachers.php");

?>