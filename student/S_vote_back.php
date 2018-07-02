<?php
include "config.php";
@session_start();
date_default_timezone_set("Asia/Bangkok");

$time = date('Y-m-d H:i:s');
$time_again = date('Y-m-d H:i:s', strtotime('+7day'));
//echo $time_again;
//echo $time;

function alert($al){
    echo "<script type = 'text/javascript'>
  alert('$al');
  window.location.href ='S_utility.php';
  </script>";
    exit();
}
$user_id = $_SESSION["UserID"];
$no = $_POST["vote"];
$sql = $sql = "SELECT vote_time , vote_again FROM vote_time WHERE UserID = '$user_id'";
$result = mysqli_query($objCon, $sql);
$row = mysqli_fetch_assoc($result);
$vote_time = $row["vote_time"];
$vote_again = $row["vote_again"];
//echo $vote_time;
if($no == "")
{
    echo "<script type = 'text/javascript'>
  alert('Please Vote!!');
  window.location.href ='S_vote.php';
  </script>";
    exit();
}else {
    if ($vote_time == ""){
        $strSQL = "INSERT INTO vote_time(UserID , vote_time , vote_again )VALUES('$user_id','$time','$time_again')";
        $objQuery = mysqli_query($objCon,$strSQL);

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

    }else{
        if ($time < $vote_again){
            alert("you can not vote right now you can vote again on $vote_again");
        }else{
            $strSQL = "UPDATE vote_time SET vote_time = '$time' ,vote_again ='$time_again' WHERE UserID = '$user_id' ";
            $objQuery = mysqli_query($objCon,$strSQL);
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
    }


}

