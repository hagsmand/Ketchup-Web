<?php
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
?>
<!DOCTYPE html>
<html>
<head>
<style>

#bd {width:500px;
    height:400px;
    border: 3px solid #f33446;
    padding: 20px;
    border-radius: 25px;
    background-color: white;
    margin-top: 100px;
}

p{
  font-family: "raleway", sans-serif;
  font-size:25px;
  text-align:center;
  font-weight: bold;
}

  a:link {
    color: black;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
    width:200px;
    height:180px;

  }

  a:visited {
    color: black;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
    width:200px;
    height:180px;

  }
a.img:hover, a.img:active {
  background-color: grey;
  border-radius: 10%;
}

img {
    max-width: 50%;
    height: auto;
}

</style>
</head>
<body>
<center>

<div id="bd">

<a href="S_seat.php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="desk-chair.png" ><p>Seat</p></a>
<a href="S_score.php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="a-mark.png" ><p>Score</p></a>
<a href="edit_profile.php" class="img" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="edit.png" ><p>Edit Profile</p></a>
<br><br><br>
<a href="S_selectsubject.php" target="_top" onmouseover="Over(this)" onmouseout="Out(this)"><p>Select Subject</p></a>
</div>

</center>

<script type="text/javascript">
	function Over(x) {
		x.style.color = "#ffcccc";
	}
	function Out(x){
		x.style.color = "black";
	}
</script>
</body>
</html>
