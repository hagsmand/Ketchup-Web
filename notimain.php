<?php
include ("config.php");
	date_default_timezone_set("Asia/Thailand");
	//$dat = date("d-m-y h:i:sa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>do it</title>
</head>
<body>

		<?php
			//insert announcement in desire class table
				$ann = $_POST['user_add'];
				$dat = $_POST['id_date'];
				$class_insert_qry = "insert into cse101_ann (ann,date) values ('$ann','$dat');";
				if(mysqli_query($objCon,$class_insert_qry)){
					echo "announced";
				}
				else die("error".mysqli_error($objCon));


				//then get the class student id and put the announcement in to student notifation table
				$get_student="Select * from cse101_student";
				$get_id=mysqli_query($objCon,$get_student);
				while($r=mysqli_fetch_array($get_id)) {

					$noti_query = "insert into 112_noti (ann,dates,seen_unseen) values ('$ann','$dat','u');";

					mysqli_query($objCon,$noti_query) or die ("Error".mysqli_error($objCon));

						}
		?>
</body>
</html>
