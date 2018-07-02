<?php
session_start();
$course_no = $_SESSION["course_no"];
  include("config.php");
$strSQL= "SELECT stu_id FROM member WHERE Status = 'USER' AND online = '1' AND course_no = '$course_no'";
$objQuery = mysqli_query($objCon,$strSQL);
$rownum = mysqli_num_rows($objQuery);
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
#bg {
  background: url(05.jpg)no-repeat;
	margin-left:15%;
	margin-top: 6.5%;
	background-size: 80%;

}
body {
    overflow:hidden;
}

input[type=text] {
    width: 50%;
		height: 5%;
    padding: 12px;
    margin:auto;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }

	#bd {width: 40%;
			height: 50%;
	    border: 3px solid red;
	    padding: 20px;
	    border-radius: 25px;
	    background-color: white;
	    background-color: rgba(255,255, 255, 0.2);
	}
	p1 {
		font-family: "raleway", sans-serif;
		font-size:30px;
		text-align:center;
	  color: white;
	}

	input[type=submit] {
	    width: 240px;
	    height: 30px;
	    background-color: #f44336;
	    color: white;
	    margin: 8px 5px;
	    border: none;
	    border-radius: 5px;
	    cursor: pointer;
	}
</style>
</head>
<body>
	<center>
		<div id="bg" >
			<br><br><br>
<center><div id="bd">
	<br><br><br>
	<p1>Now You Have <?php echo $rownum;?> Online student
    <br>How many people do you want in one group?
    <form action="T_random_back.php" method="post">
      <br><br><input name="groupmem" type="text" id="groupmem" size="5%">
      <br><br><input type="submit" name="Submit" value="Submit"></p1><br><br><br>
    </form>
</div></center><br><br><br><br><br><br><br></div>
</center>
</body>
</html>
