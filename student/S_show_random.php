<?php
session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_SESSION["stu_id"];
$name = $_SESSION["Name"];

$groupSQL = "SELECT * FROM random WHERE course_no = '$course' AND stu_id = '$stuID'";
$groupQuery = mysqli_query($objCon,$groupSQL);
$groupResult = mysqli_fetch_array($groupQuery);

$mygroup = $groupResult["group_no"];

$ShowgroupSQL = "SELECT * FROM random WHERE course_no = '$course' AND group_no = '$mygroup'";
$ShowgroupQuery = mysqli_query($objCon,$ShowgroupSQL);
$strSQL = "SELECT * FROM random WHERE stu_id = $stuID AND course_no = $course";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult)
    {
    echo "<br><br><center><h1>You are in group ".$mygroup."<br>These are your group mates<h1>";
    echo "<table align='center'>";
    echo "<tr><td class='top'>Name</td><td class='top' >Student number</td></tr>";

    while($ShowgroupResult = mysqli_fetch_array($ShowgroupQuery)) {
     echo "<tr>";
    echo "<td> ".$ShowgroupResult["name"]." </td>";
    echo "<td> ".$ShowgroupResult["stu_id"]." </td>";
    echo "</tr>";
    }
    echo "</table></center>";
}else {
    echo "<h2> Sorry!!! $name You are not in the Group 😭</h2>";
    }

session_write_close();
mysqli_close($objCon);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
    <style>
    table{
        border-collapse:separate;
        border:2px solid red;
        border-radius:10px;
        -moz-border-radius:10px;
        background-color:white;
        padding: 40px;
        width:50% ;
        height:70px;
    }

    tr,td,h1{
      font-family: "raleway", sans-serif;
      font-size:16px;
      text-align:center;
      font-weight: bold;
      color: #944350;
        padding: 0px;
        margin-top:5px ;
    }

    h1{
      font-family: "raleway", sans-serif;
      font-size:40px;
      text-align:center;
      font-weight: bold;
      color:#f44336;
    }
    h2{
        font-family: "raleway", sans-serif;
        font-size:50px;
        text-align:center;
        padding-top: 300px;
        font-weight: bold;
        color:#f44336;
    }

    .top{
    font-size:20px;
    }

    tr:nth-child(even){
      background-color: rgba(255, 0, 0, 0.05);
    }
    </style>
     <title></title>
   </head>
   <body>

   </body>
 </html>
