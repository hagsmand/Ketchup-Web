<html>
<head>
<style>
	.center { width: 40%;
		  border: 3px solid red;
                  padding: 15px;
                  border-radius: 25px;
                  background-color: white;
		  background-color: rgba(192,192,192,0.1);
                  font-family: "raleway", sans-serif;
	          font-size: 20px;
	          text-align: center; 
	          margin-top: 140px;}	
</style>
</head>
<body>

	<center>
	<div class="center">
	<?php
		@session_start();
		include("config.php");
	
		$stu_id = $_SESSION["stu_id"];
		$course_no = $_SESSION["course_no"];

		$sql = "SELECT vote_no FROM compettitive WHERE stu_id = $stu_id AND course_no = $course_no";
		$result = mysqli_query($objCon, $sql);
		$row = mysqli_fetch_assoc($result);
		$vote = $row["vote_no"];

		if($vote == ''){
			echo '<img src="score01.png" alt="icon" /><br><br>';
    			echo "You are not in the competitive.";
		}
		else {
			echo '<img src="score02.png" alt="icon" /><br><br>';
    			echo "Your score is ".$vote  ;
		}

	?>
	</div>
	</center>
</body>
</html>

