<?php
session_start();
include("config.php");
$course = $_SESSION["course_no"];

echo "<br><h1>These are your student's name and their group 😊<h1>";

$groupNoSQL= "SELECT DISTINCT group_no FROM random WHERE course_no = '$course'";
$groupNoQuery = mysqli_query($objCon,$groupNoSQL);
$groupnum = mysqli_num_rows($groupNoQuery);

for ($i = 0 ; $i<$groupnum ; $i++) {
  $resultgroup = mysqli_fetch_array($groupNoQuery);
  $groupArray[$i] = $resultgroup["group_no"];
}

for ($i=0; $i < $groupnum; $i++) {

    $ShowSQL = "SELECT * FROM random WHERE course_no = '$course' AND group_no = '$groupArray[$i]'";
    $ShowQuery = mysqli_query($objCon,$ShowSQL);
    $Shownum = mysqli_num_rows($ShowQuery);
    echo "<table align='center'>";
    echo "<tr>";
    echo "<td class='top' >GROUP</td>";
    echo "<td class='top'>Name</td>";
    echo "<td class='top' >Student number</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td  rowspan =".$Shownum."> ".$groupArray[$i]." </td>";
  for ($j=0; $j < $Shownum; $j++) {
    $resultShow = mysqli_fetch_array($ShowQuery);
    echo "<td> ".$resultShow["name"]." </td>";
    echo "<td> ".$resultShow["stu_id"]." </td>";
    echo "</tr>";
  }
    echo "</table></center><br>";
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
        padding: 15px;
        width:40% ;
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
