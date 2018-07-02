<?php
include ("config.php");
$stu[] =("");

$strSQL = "SELECT * FROM  member";
$objQuery = mysqli_query($objCon,$strSQL);
$num_row =mysqli_num_rows($objQuery);

for ($i =0,$j =0 ; $i <50 ; $i++) {
  $sql = "SELECT stu_id  FROM member WHERE Status = 'ADMIN' AND UserID = '$i'";
  $result = mysqli_query($objCon, $sql);
  $row = mysqli_fetch_assoc($result);
      if ($row!=NULL) {
        $stu[$j] = $row["stu_id"];
            $j++;
      }
    }

$d = array("mon","tue","wed","thu","fri","sat","sun");

for ($i=0; $i < 10 ; $i++) {
  $sql = "SELECT name  FROM member WHERE stu_id = '$stu[$i]'";
  $result = mysqli_query($objCon, $sql);
  $row = mysqli_fetch_assoc($result);
  $name[$i] = $row["name"];

  for ($j=0; $j < 7; $j++) {
    $sql = "SELECT time_str,time_end  FROM time WHERE stu_id = '$stu[$i]' AND  day ='$d[$j]'";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $s[$i][$j] = $row["time_str"];
    $e[$i][$j] = $row["time_end"];
  }
}

mysqli_close($objCon);
?>

<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

h1 {
  margin-left: 20px;
  margin-top: 20px;
  font-size: 40px;
  text-align: center;
  font-weight: bold;
  font-family: "raleway", sans-serif;
}

.top {
  font-weight: bold;
  font-size: 20px;
  background-color: white;
}

table{
    border-collapse:separate;
    border-spacing: 0px;
    border-radius:10px;
    -moz-border-radius:10px;
    border:3px solid #f44336;
    background-color:white;
    padding: 0px;
    width:80%;
    height:80%;
    margin-left: 100px;
}

tr,td,{
  font-family: "raleway", sans-serif;
  font-size:16px;
  text-align:center;
  font-weight: bold;
}


</style>

<table border="1" align = "center" width=70% height=50% bgcolor ="#CCE2B5">
    <tr align = "center">
      <h1> Teachers' Available Time <br>
        <td class="top">Teacher</td>
        <td class="top">Monday</td>
        <td class="top">Tuesday</td>
        <td class="top">Wednesday</td>
        <td class="top">Thursday</td>
        <td class="top">Friday</td>
        <td class="top">Saturday</td>
        <td class="top">Sunday</td>
      </h1>
    </tr>

      <?php
$lengthName = count($stu);
      for ($i=0; $i < $lengthName ; $i++) {
        echo ' <tr align = "center">'.'<td>'.$name[$i].'</td>';
        for ($j=0; $j < 7 ; $j++) {
          if ($s[$i][$j]==NULL&&$e[$i][$j]==NULL)
            echo '<td style="background-color:#f44336">'."BUSY".'</td>';
          else
            echo '<td style="background-color:#CCE2B5">'.$s[$i][$j]."-".$e[$i][$j].'</td>';
        }
        echo '</tr>';
      }
       ?>
</table>
</html>
</body>

<html>
