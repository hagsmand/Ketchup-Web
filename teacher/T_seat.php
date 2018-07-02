<?php
session_start();
include("config.php");
  $strSQL = "SELECT * FROM subject WHERE  course_no = '".$_SESSION['course_no']."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);

  $sitRowi = $objResult["row"];
  $sitColj = $objResult["col"];

$Row = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$Pnamee = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

for ($i=0; $i < $sitRowi ; $i++) {
  for ($j=0; $j < $sitColj; $j++) {
    $Pname[$i][$j] = $Pnamee[$i];
    $Pname[$i][$j] .= $j+1;
      $var[$i][$j] = $Row[$i];
      $var[$i][$j] .= $j+1;
  }
}
?>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>Queue</title>

<style>
      td {
        text-align: center;
        color:white;
      }

      table {padding: 5%;
        border-spacing: 10px;
      }

      div{
        width:55px;
        height: 50px;
        background: #555555;
        text-align: center;
        padding-top: 15px;
      }

      body,h1{
        font-family: "raleway", sans-serif;
        font-size: 10px; font color: white;
        background: #383838;
      }

      input[type=submit] {
        width: 200px;
        height: 30px;
        background-color: #f44336;
        color: white;
        margin: 8px 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
       }

</style>

</head>
  <body>

<form method="post" action="S_save_seat.php">
    <table style="width:100%">
      <tr style="boder:1px" >
        <td colspan = <?= $sitColj+2 ?>  style="border: 1px solid white; padding: 12px;"> <p style="color:white;">This is Front Board</p></td>
      </tr>

    	<tr>
        <td></td>
<?php
  for ($i=1; $i <= $sitColj; $i++) {
    if($i<$sitColj){
        echo "<td>".$i."</td>";
    }
    else {
        echo "<td>".$sitColj."</td>";
    }
  }
  ?>
        <td></td>
      </tr>

  <?php
  for ($i=0; $i < $sitRowi ; $i++) {
    echo "<tr><td>".$Row[$i]."</td>";
  for ($j=0; $j < $sitColj; $j++) {
    // echo "<td><input type=\"submit\" name=\"sitPosition\" value=\"".$var[$i][$j]."\"></td>";
    $NowVar = $var[$i][$j];
    $strSQL = "SELECT * FROM member WHERE sit_po = '$NowVar' AND course_no = '".$_SESSION['course_no']."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult){
      echo "<td style=\"font-size:10px;\"><div>".$objResult["stu_id"]."<br>".$objResult["name"]."</div></td>";
    }
    else {
      echo "<td><img src=\"".$Pname[$i][$j].".png\" width=\"55px\" height=\"50px\"></td>";
    }
  }
    echo "<td>".$Row[$i]."</td></tr>";
}
 ?>
  </form>
  <tr>
    <td colspan = <?= $sitColj+2 ?>>
      <form method="post" action="T_set_room.php" >
       <input type="submit" name="Submit" value="Edit Room-scale">
      </form>
    </td>
  </tr>
</table>
  </body>
    </html>
<?php
	mysqli_close($objCon);
?>
