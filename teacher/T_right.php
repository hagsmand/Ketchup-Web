<?php
session_start();
include "config.php";
$course_no = $_SESSION["course_no"];
$name = $_SESSION["Name"] ;


$strSQL = "SELECT * FROM subject WHERE course_no = '$course_no' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$num = $objResult["Name"];
$comment = $objResult["comment"];


mysqli_close($objCon);

?>

<html>
<title>HOME</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    body,h1{font-family: "raleway", sans-serif}
    body {font-size:16px;}
    img { border-radius: 50%;}
    h1 {
        margin-top: 5%;
        margin-left: 2%;
        margin-right: 25%;
    }


    #bd {width: 35%;
        border: 3px solid red;
        padding: 20px;
        border-radius: 25px;
        background-color: white;
        margin-top: 10%;
        margin-left: 2%;
        margin-right: 25%;

        background-color: rgba(255,255, 255, 0.2);
    }
    a{
        color: #f44336;
    }
    #ann{
        font-size: 30px;
    }

</style>
<body>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <center><div id="bd" style="margin-right:20%;">
            <?php
            echo ("<div id='ann'>Announcment📯 </div> <br>");
            echo $comment;

            ?></div>
        <h1><b>Welcome Teacher
                <br><?php echo $name; echo "<br> no: ";  echo $_SESSION["stu_id"];?> <br>
                To <a><?php echo $num ?></a></b></h1>
        <hr style="  margin-right: 23%; width:30%;border:5px solid #f44336" class="w3-round">
        <br><br>

    </center>
</body>
</html>
