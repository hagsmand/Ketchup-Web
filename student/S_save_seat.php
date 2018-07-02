<?php
  session_start();
  include("config.php");
  function alert($al){
    echo "<script type = 'text/javascript'>
    alert('$al');
    window.location.href ='S_about.php';
    </script>";
  }
$course_no = $_SESSION["course_no"];
  $strSQL = "UPDATE member SET sit_po = '".($_POST['sitPosition'])."' WHERE UserID = '".$_SESSION["UserID"]."' AND course_no = $course_no";
	$objQuery = mysqli_query($objCon,$strSQL);
	mysqli_close($objCon);
 $seat = $_POST['sitPosition'];
 alert("Your Seat Is Now : $seat");

?>
