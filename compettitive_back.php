<?php
include("config.php");
session_start();

$name = $_SESSION["name"];


date_default_timezone_set("Asia/Bangkok");
$time = date("Y-m-d h:i:s");

if(trim($_POST["filename"]) == "")
{
    echo "Please input File name!";
    exit();
}

if(trim($_POST["link"]) == "")
{
    echo "Please input Link!";
    exit();
}

$strSQL = "SELECT * FROM compettitive WHERE file_name = '".mysqli_real_escape_string($objCon,$_POST['filename'])."' or link = '".mysqli_real_escape_string($objCon,$_POST['link'])."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult)
{
    echo "your file is already exist";
}
else
{

    $strSQL = "INSERT INTO compettitive(id,name,file_name,link,date_time,vote_no) VALUES('".$_SESSION["stu_id"]."','".$_SESSION["name"]."','".$_POST["filename"]."','".$_POST["link"]."','$time','0')";
    $objQuery = mysqli_query($objCon,$strSQL);




}
session_write_close();
mysqli_close($objCon);
header("location:vote.php");
?>
