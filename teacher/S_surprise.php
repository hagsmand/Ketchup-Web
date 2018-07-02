<?php
include "config.php";
session_start();
function alert($al){
    echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='login.php';
		</script>";
    exit();
}
if($_SESSION['UserID'] == "")
{
    alert("Please Login!");
}

$stu_id = $_SESSION["stu_id"];
echo $stu_id;
$strSQL = "SELECT number FROM utility WHERE id = '1'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$result = $objResult["number"];
?>

<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

h1 {font-family: "raleway", sans-serif
    margin-top: 200px;
    margin-left: 250px;
    color: #f44336;
}


</style>
<body>
<div style="margin-top:75px;margin-left:250px;">
<?php
if ($result == $stu_id){
    echo "<img src= 'surprise.JPG'/>";
    echo '<h1>'.$result.'</h1>';
}else{
    echo "<img src= 'notyou.JPG'/>";
}
session_write_close();
mysqli_close($objCon);
?>

  </body>
</html>
