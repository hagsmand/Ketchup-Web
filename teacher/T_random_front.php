<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
}

p{
	font-family: "raleway", sans-serif;
	font-size:40px;
	text-align:center;
	font-weight: bold;
}

img{
     height: 15%;
     width: 20%;}

#bd {width: 50%;
		     border: 3px solid red;
		     padding: 20px;
		     border-radius: 25px;
		     background-color: white;
		     background-color: rgba(255,255, 255, 0.2);
		 }
		 a:link {
	     color: black;
	     text-decoration: none;
	     padding: 10px 20px;
	     display: inline-block;
	     width:50%;
	     height:25%;

	   }

	   a:visited {
	     color: black;
	     text-decoration: none;
	     padding: 10px 20px;
	     display: inline-block;
	     width:50%;
	     height:25%;

	   }
	 a:hover, a:active {
	   background-color: gray;
	   border-radius: 10%;
	 }
</style>
<body>
	<center>
	<div id="bd" style="margin-top:7%;">

	<a href="T_random.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><p>Random</p></a>
	<br><img src="shuffle.png" >
	<br><a href="T_showgroup.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><p>Show Group</p></a>
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
