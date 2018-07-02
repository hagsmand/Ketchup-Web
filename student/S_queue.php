<?php
@session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_SESSION["stu_id"];

$checkSQL = "SELECT no FROM queue WHERE course_no = '$course' AND stu_id = '$stuID'";
$checkQuery = mysqli_query($objCon,$checkSQL);
$checkResult = mysqli_fetch_array($checkQuery);
//เชคว่าอยู่ในคิวรึยัง
   if($checkResult){ //อยุในคิวแล้ว
     $QueueSQL = "SELECT stu_name,no FROM queue WHERE course_no = '$course' ORDER BY no";
     $QueueQuery = mysqli_query($objCon,$QueueSQL);
     $rownum = mysqli_num_rows($QueueQuery);

     for ($i = 0 ; $i<$rownum ; $i++) {
       $result = mysqli_fetch_array($QueueQuery);
       $resultArray[$i] = $result["no"];
     }
     $key = array_search($checkResult["no"], $resultArray);
     $nowQueue = $key+1;
     echo "<div>".$nowQueue."</div>";
   }
  ?>
