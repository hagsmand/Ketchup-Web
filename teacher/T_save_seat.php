<?php
  session_start();
  include("config.php");
  function alert($al){
    echo "<script type = 'text/javascript'>
    alert('$al');
    window.location.href ='T_about.php';
    </script>";
  }

  $strSQL = "UPDATE member SET sit_po = '".($_POST['sitPosition'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	mysqli_close($objCon);
 $seat = $_POST['sitPosition'];
 alert("Your Seat Is Now : $seat");

?>
