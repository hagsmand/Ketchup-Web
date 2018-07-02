<?php
session_start();
include("config.php");
  $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
?>

<html>
<title>HOME</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body,h1{font-family: "raleway", sans-serif}
body {font-size:16px;}
img { border-radius: 50%;}
h1 {
    margin-top: 200px;
    margin-right: 400px;
    margin-left: 80px;
}


a{
  color: #f44336;
}

</style>
<body>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <center>
    <h1><b>Welcome
    <br><?php echo $objResult["Name"]; ?>
    <br>To <a>Ketchup</a></b></h1>
    <hr style="  margin-right: 330px; width:150px;border:5px solid #f44336" class="w3-round">

  </center>
  </body>
</html>
