<?php
include("config.php");
session_start();
$stu_id = "44444444";

if(isset($_POST['user_add']) && isset($_POST['id_date'])) {

  $events = $_POST['user_add'];
  $id = $_POST['id_date'];

  $strSQL = "SELECT events FROM calendar WHERE id = '$id' AND user_id ='$stu_id'";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
     if($objResult)
     {
       $strSQL ="UPDATE calendar SET events = '$events' WHERE id = '$id' AND user_id = '$stu_id'";
       $objQuery = mysqli_query($objCon, $strSQL);

     }else {
       $strSQL = "INSERT INTO calendar(id,events,user_id) VALUES ('$id','$events','$stu_id')";
       $objQuery = mysqli_query($objCon,$strSQL);
     }
}

session_write_close();
mysqli_close($objCon);
?>
