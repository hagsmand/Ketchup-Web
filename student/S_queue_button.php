<?php
@session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_SESSION["stu_id"];

$strSQL = "SELECT * FROM member WHERE stu_id = '$stuID'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
  $name = $objResult["name"];
  $sit = $objResult["sit_po"];

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
   ?>

   <html>
   <style>
   p1 {
   	font-family: "raleway", sans-serif;
   	font-size:25px;
   	text-align:center;
     color: #f44336;
   }

   #bd {width: 35%;
       border: 3px solid red;
       padding: 20px;
       border-radius: 25px;
       background-color: white;
       background-color: rgba(255,255, 255, 0.2);
   }
   input[type=submit] {
     width: 30%;
     height: 5%;
       background-color: #f44336;
       color: white;
       margin: 8px 5px;
       border: none;
       border-radius: 5px;
       cursor: pointer;
   }
   </style>
   <body>
     <form method="post" id="please1" action="S_queue_cancel.php">
      <center><div id="bd" style="margin-top:10%">
        <p1>Your queue is <?php echo $nowQueue; ?></p1>
        <br>
    <input type="submit" name="Submit" value="Cancel queue" >
    <input type="hidden" name="stu_id" value="<?=$stuID?>">
  </div></center>
   </form>
 </body>
   </html>

   <?php
   }else { //ไม่ได้อยู่ในคิว
?>
 <html>
 <style>
 p1 {
   font-family: "raleway", sans-serif;
   font-size:25px;
   text-align:center;
   color: #f44336;
 }

 #bd {width: 35%;
     border: 3px solid red;
     padding: 20px;
     border-radius: 25px;
     background-color: white;
     background-color: rgba(255,255, 255, 0.2);
 }
 input[type=submit] {
     width: 15%;
     height: 5%;
     background-color: #f44336;
     color: white;
     margin: 8px 5px;
     border: none;
     border-radius: 5px;
     cursor: pointer;
 }
 </style>
 <body>
    <form method="post" action="S_queue_save.php" name="please">
      <center><div id="bd" style="margin-top:10%;">
      <p1>Press to queue </p1>
      <br>
      <input type="hidden" name="name" value="<?=$name?>">
      <input type="hidden" name="sit" value="<?=$sit?>">
      <input type="hidden" name="stu_id" value="<?=$stuID?>">
      <input type="hidden" name="course_no" value="<?=$course?>">
      <input type="submit" name="Submit" value="Queue">
    </div></center>
  </form>
</body>
 </html>
 <?php
   }
  ?>
