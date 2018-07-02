<?php
  include("config.php");
  session_start();
  $course_no = $_SESSION["course_no"];
  $numPeople = $_POST["groupmem"];

  $sql = "DELETE FROM random WHERE course_no = '$course_no'";
  mysqli_query($objCon,$sql);

  $strSQL= "SELECT stu_id FROM member WHERE Status = 'USER' AND online = '1' AND course_no = $course_no";
  $objQuery = mysqli_query($objCon,$strSQL);

  $rownum = mysqli_num_rows($objQuery);
//  echo $rownum."<br>"."<br>";

  $a = $rownum/$numPeople;
  $numOfGroup = floor($a);
  $Ses = $rownum%$numPeople;
  $numGroupSes = $numOfGroup + 1;

//  echo "People in group = ".$numPeople.'     num Of Group = '.$numOfGroup.'     Ses='.$Ses."<br>"."<br>";

  $resultArray[] = ("");
  $GroupAndName[] = ("");

  for ($i = 0 ; $i<$rownum ; $i++) {
    $result = mysqli_fetch_array($objQuery);
    $resultArray[$i] = $result["stu_id"];
//    echo $i."---".$resultArray[$i]."<br>";
  }

//  echo "<br><br>-------------------------------RandomStart-----------------------------------<br><br>";

for ($groupNo=1; $groupNo <= $numOfGroup; $groupNo++) {
//    echo "------------>".$groupNo."<br>";

  for ($i = 0 ; $i<$numPeople ; $i++) {
    $Name = rand ( 0 , count($resultArray));
    if($resultArray[$Name]!=NULL){
      $GroupAndName[$groupNo]=$resultArray[$Name];
//        echo $GroupAndName[$groupNo]."<br>";

            $number = $GroupAndName[$groupNo];
            $sql = "SELECT name FROM member WHERE stu_id = '$number'  AND course_no = '$course_no'";
            $result = mysqli_query($objCon, $sql);
            $row = mysqli_fetch_assoc($result);
              $hee =$row["name"];
            $strSQL = "INSERT INTO random (stu_id,group_no,name,course_no) VALUES ($GroupAndName[$groupNo],$groupNo,'$hee',$course_no)";
            $objQuery = mysqli_query($objCon, $strSQL);
        unset($resultArray[$Name]);
        sort($resultArray);
    }
    elseif ($resultArray[$Name]==NULL) {
      $i--;
    }
  }
//  echo "<br>"."<br>";
}

if ($Ses!=0) {
  sort($resultArray);
//  echo "------------last>".$numGroupSes."<br>";

  for ($i = 0 ; $i<count($resultArray); $i++) {
//        echo $resultArray[$i]."<br>";
          $number = $resultArray[$i];
          $sql = "SELECT name FROM member WHERE stu_id = '$number'  AND course_no = '$course_no'";
          $result = mysqli_query($objCon, $sql);
          $row = mysqli_fetch_assoc($result);
            $hee =$row["name"];
          $strSQL = "INSERT INTO random (stu_id,group_no,name,course_no) VALUES ('$resultArray[$i]','$numGroupSes','$hee','$course_no')";
          $objQuery = mysqli_query($objCon, $strSQL);

  }

}
echo "<script type = 'text/javascript'>
		alert('Grouping Complete');
		window.location.href ='T_showgroup.php';
		</script>";
mysqli_close($objCon);
?>
