<?php
include "config.php";
function alert($al){
  echo "<script type = 'text/javascript'>
  alert('$al');
  window.location.href ='S_utility.php';
  </script>";
}
$no = $_POST["vote"];
if($no == "")
{
    echo "Please vote!";
    exit();
}else {

    $sql = "SELECT vote_no,name  FROM compettitive WHERE no = $no";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $vote = $row["vote_no"];
    $vote_update = $vote += 1;
    $name = $row["name"];

    $strSQL = "UPDATE compettitive SET vote_no = $vote_update WHERE no = $no";
    $objQuery = mysqli_query($objCon, $strSQL);
    alert("Thank you for vote $name");
    mysqli_close($objCon);

}
