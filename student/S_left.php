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
        div.num{
            border-radius:10px;
            width: 150px;
            text-align: center;
            font-size: 30px;
            background-color: white;
            color: #f44336;
        }
</style>
</head>
<body bgcolor="#f44336">
<br><br>
<CENTER><img src="student.png"  width="100" height="100"></CENTER>
<br><a href="S_right.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">    Home           </a>&nbsp;&nbsp;
<br><a href="S_calendar.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Calendar </a>&nbsp;&nbsp;
<br><a href="S_chatbox_chat.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Chat Box     </a>&nbsp;&nbsp;
<br><a href="testkratoo.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Webboard     </a>
<br><a href="S_storage.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">  Storage        </a>&nbsp;&nbsp;
<br><a href="S_time_table.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Teachers </a>&nbsp;&nbsp;
<br><a href="S_utility.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">Utility </a>&nbsp;&nbsp;
<br><a href="S_about.php" class="top" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)">About Me </a>&nbsp;&nbsp;


<script type="text/javascript">
	function Over(x) {
		x.style.color = "black";
	}
	function Out(x){
		x.style.color = "white";
	}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<center><div id="superfuckframe" name="superfuckframe"  class="num" >
        <?php include("Eve_Q_S.php"); ?>
        <script>
            function autoRefresh_div(){
                $("#superfuckframe").load("Eve_Q_S.php").show();
            }
            setInterval("autoRefresh_div();", 1000);
        </script>
    </div></center>

<center><p>
<a href="logout.php" target="_top" ><img src="logout.png" width="32" height="32"></a></p></center>


</body>
</html>
