<html>
<title>Utility</title>
<body>

  <style>

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
    width:150px;
    height:180px;

  }

  a:visited {
    color: black;
    text-decoration: none;
    padding: 10px 20px;
    display: inline-block;
    width:150px;
    height:180px;

  }
a:hover, a:active {
  background-color: gray;
  border-radius: 10%;
}

#bd {width: 50%;
    border: 3px solid red;
    padding: 10px;
    border-radius: 25px;
}

  </style>
<center>
<div id="bd" style="margin-top:40px;">

<a href="Random.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="random.png" ><p>Random</p></a>
<a href="Queue.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="queue.png" ><p>Queue</p></a>
<a href="Surprise_teacher.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="surprise.png" ><p>Surprise</p></a>
<a href="Dictionary.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="dic.png" ><p>Dictionary</p></a>
<a href="vote.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="votee.png" ><p>Vote</p></a>
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
