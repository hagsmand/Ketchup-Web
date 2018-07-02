<?php
include("config.php");
session_start();
function alert($al){
  echo "<script type = 'text/javascript'>
  alert('$al');
  window.location.href ='T_competitive.php';
  </script>";
  exit();
}
$name = $_SESSION["name"];


date_default_timezone_set("Asia/Bangkok");
$time = date("Y-m-d h:i:s");

if(trim($_POST["filename"]) == "")
{
    alert("Please Input FileName!");
}

if(trim($_POST["link"]) == "")
{
    alert("Please Input Link!");
}

$strSQL = "SELECT * FROM compettitive WHERE file_name = '".mysqli_real_escape_string($objCon,$_POST['filename'])."' or link = '".mysqli_real_escape_string($objCon,$_POST['link'])."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult)
{
    alert("Your file is already Exist!");
}
else
{

    $strSQL = "INSERT INTO compettitive(id,name,file_name,link,date_time,vote_no) VALUES('".$_SESSION["stu_id"]."','".$_SESSION["name"]."','".$_POST["filename"]."','".$_POST["link"]."','$time','0')";
    $objQuery = mysqli_query($objCon,$strSQL);
    echo "<script type = 'text/javascript'>
    alert('You are in Compettitive!');
    window.location.href ='T_vote.php';
    </script>";

}
session_write_close();
mysqli_close($objCon);

?>
