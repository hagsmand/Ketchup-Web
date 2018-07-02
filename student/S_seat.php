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
<!--    <meta http-equiv="refresh" content="1" >-->
<title>Queue</title>

<style>
      td {
        text-align: center;
        color:white;
      }

      table {padding: 5%;
        border-spacing: 10px;
        table-layout:fixed;
      }

      input[type=image] {
        width:55px;
        height: 50px;
        padding-top: 0px;
        padding-bottom: 1px;
        cursor: pointer;
        opacity: 0.65;
        filter: alpha(opacity=60);
      }

      div{
        width:55px;
        height: 50px;
        text-align: center;
        padding-top: 17px;
          font-size: 10px;
      }

      body {
        background: #383838;
      }

      input[type=image]:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);}

      body,h1{
        font-family: "raleway", sans-serif;
        font-size: 10px; font color: white;
      }
      image{
    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
      }
</style>

</head>
  <body>

<form method="post" action="S_save_seat.php">
    <table style="width:100%">
      <tr style="boder:1px" >
        <td colspan = <?= $sitColj+2 ?>  style="border: 1px solid white;"> <p style="color:white;">This is Front Board <br> Hi, <?php echo $_SESSION["Name"]; ?> Please select your seat from the left of the first row </p></td>
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
        $result = $objResult["stu_id"];
        $rest = substr("$result",4);
      echo "<td><center><div>$rest<br>".$objResult["name"]."</div></center></td>";
    }
    else {
      echo "<td><input type=\"image\" name=\"sitPosition\" src=\"".$Pname[$i][$j]."\".png\".alt=\"".$NowVar."\" value=\"".$NowVar."\"></td>";
    }
  }
    echo "<td>".$Row[$i]."</td></tr>";
}
 ?>
    </table>
  </form>
  </body>
    </html>
<?php
	mysqli_close($objCon);
?>
