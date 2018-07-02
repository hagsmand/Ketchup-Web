<?php
@session_start();
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
?>
<html>
<head><title> Main </title></head>

<frameset cols="200,*" frameborder="1" border="1" framespacing="0">

		<frame src="T_left.php" name="frame1" scrolling="No" noresize="noresize" 	id="leftFrame" title="leftFrame" >

		<frame src="T_right.php" name="frame2" id="mainFrame" 	title="mainFrame" >

		</frameset>
</frameset>
</html>
