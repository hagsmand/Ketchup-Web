<html>
<title>Teachers</title>
<body>

  <style>

  p{
  	font-family: "raleway", sans-serif;
  	font-size:25px;
  	text-align:center;
    font-weight: bold;
    margin-top: 40px;
  }

  a:link {
    color: black;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
    width:150px;
    height:100px;

  }

  a:visited {
    color: black;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
    width:150px;
    height:100px;

  }
a:hover, a:active {
  background-color: #f44336;
  border-radius: 10%;
}


#bd {width: 50%;
    border: 3px solid red;
    padding: 10px;
    border-radius: 25px;
}

  </style>

<center>
<div id="bd" style="margin-top:200px;">
<p>
<a href="T_add_time.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="selecttime.png" ><br>Select Time</a>
<a href="T_time_table.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="timetable.png" ><br>Time Table</a>
  </p>

</div>
</center>

<script type="text/javascript">
	function Over(x) {
		x.style.color = "white";
	}
	function Out(x){
		x.style.color = "black";
	}
</script>

</body>
</html>
