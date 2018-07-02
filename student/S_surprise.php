<?php
include "config.php";
session_start();
$course_no = $_SESSION["course_no"];
$stu_id = $_SESSION["stu_id"];
$strSQL = "SELECT number FROM surprise WHERE course_no = $course_no ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$result = $objResult["number"];
?>

<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


h1 {font-family: "raleway", sans-serif;
    margin-top: 10%;
    color: #f44336;
}


  button {  width: 150px;
    height: 5%;
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;

  }
body{

  background-image: url(tenor.gif);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

#bd {
  /*background-color: white;*/
  width: 45%;
  height: 7%;
    border-radius: 25px;
    background-color: rgba(255,255, 255, 0.5);


}

</style>

<body>
<center>
<div style="margin-top:10%">
<?php
if ($result == $stu_id){
    echo "<img style= 'width:370px;height:280px;' src= 'surprise.gif'/>";
    echo '<div id="bd">';
    echo '<h1>ยินดีด้วย '.$result.' คุณคือผู้โชคดี</h1>';
    echo '</div>';
}else{
    echo "";
    echo "<img src= 'notyou.GIF'/>";
    echo '<div id="bd">';
    echo '<h1>เสียใจด้วย '.$stu_id.' คุณไม่ได้ไปต่อ</h1>';
    echo '</div>';
}
session_write_close();
mysqli_close($objCon);
?>

<br><br>
<button id="re">Restart</button>
<p id="demo" > </p>

<script type="text/javascript">

document.getElementById("re").onclick = re;

function re(){
  location.reload();
}


</script>

</center>
</div>
  </body>
</html>
