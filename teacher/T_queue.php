
<html lang="en" dir="ltr">
   <head>
 <meta http-equiv="refresh" content="3" >
       <script type="text/JavaScript">
           function timedRefresh(timeoutPeriod) {
               setTimeout("location.reload(true);",timeoutPeriod);
           }
       </script>
    <style>
    table{
        border-collapse:separate;
        border:2px solid red;
        border-radius:4px;
        background-color:white;
        padding: 10px;
        width: 500px;
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

    .one{
        background-color: greenyellow;
    }

    input[type=submit] {
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
     }

    </style>
   </head>
   <body>
       <?php
       @session_start();
       include("config.php");
       $course = $_SESSION["course_no"];

       $QueueSQL = "SELECT * FROM queue WHERE course_no = '$course' ORDER BY no";
       $QueueQuery = mysqli_query($objCon,$QueueSQL);
       $rownum = mysqli_num_rows($QueueQuery);

       echo "<br><table align='center'>";
       echo "<tr>";
       echo "<td class='top'>Queue</td>";
       echo "<td class='top'>Name</td>";
       echo "<td class='top'>Student number</td>";
       echo "<td class='top'>Cancel Queue</td>";
       echo "</tr>";
       $Q = 1;
       while($result = mysqli_fetch_array($QueueQuery)) {
           if ($Q == 1){
               echo "<tr class=\"one\">";
           }
           else{
               echo "<tr>";
           }
           echo "<form method=\"post\" action=\"S_queue_cancel.php\" >";
           echo "<td> ".$Q." </td>";
           echo "<td> ".$result["stu_name"]." </td>";
           echo "<td> ".$result["stu_id"]." </td>";
           echo "<td><input type=\"submit\" name=\"Submit\" value=\"Cancel\" style=\"width:100px; height:25px\"></td>";
           echo "<input type=\"hidden\" name=\"stu_id\" value=\"".$result["stu_id"]."\"></form></td>";
           echo "</tr>";
           $Q++;
       }

       echo "</table></center>";
       ?>
       <br><CENTER>
     <form method="post" action="T_queue_clear.php" >
      <input type="submit" name="Submit" value="Cancel All" style="width:200px;height:50px">
     </form></CENTER>
   </body>
 </html>
