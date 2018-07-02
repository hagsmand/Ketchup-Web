<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

		body,h1{font-family: "raleway", sans-serif}
		body{font-size: 16px;
			font-weight: bold;
		}


		a.top:link {
			color: white;
			text-decoration: none;
 			padding: 10px 20px;
  			display: inline-block;
			width:150px;
			height:40px;
		}

		a.top:visited {
			color: white;
			text-decoration: none;
 			padding: 10px 20px;
  			display: inline-block;
			width:150px;
			height:40px;
		}
		a.top:hover, a.top:active {
    background-color: white;
}

img {
    border-radius: 50%;
}

p {
    margin-top: 210px;
}
</style>
</head>
<body bgcolor="#f44336">
<br><br>
<CENTER><img src="man.png"  width="100" height="100"></CENTER>
<br><a href="right.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">    Home           </a>&nbsp;&nbsp;
<br><a href="calendar.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Calendar </a>&nbsp;&nbsp;
<br><a href="Chatbox.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Chat Box     </a>&nbsp;&nbsp;
<br><a href="Storage.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">  Storage        </a>&nbsp;&nbsp;
<br><a href="Teachers.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Teachers </a>&nbsp;&nbsp;
<br><a href="Utility.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Utility </a>&nbsp;&nbsp;
<br><a href="About.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">About Me </a>&nbsp;&nbsp;


<script type="text/javascript">
	function Over(x) {
		x.style.color = "black";
	}
	function Out(x){
		x.style.color = "white";
	}
</script>

<p><a href="notification.php" target="frame2"  ><img src="noti.png"  width="32" height="32"></a>
<a href="login.php" target="_top" style="margin-left:125px;"><img src="logout.png" width="32" height="32"></a></p>


</body>
</html>
