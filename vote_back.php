<?php
include "config.php";
$no = $_POST["vote"];
if($no == "")
{
    echo "Please vote!";
    exit();
}else {

    $sql = "SELECT vote_no  FROM compettitive WHERE no = $no";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $vote = $row["vote_no"];
    $vote_update = $vote += 1;

    $strSQL = "UPDATE compettitive SET vote_no = $vote_update WHERE no = $no";
    $objQuery = mysqli_query($objCon, $strSQL);
    mysqli_close($objCon);
    header("location:Utility.php");
}




