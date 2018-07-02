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
a:hover, a:active {
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

<a href="seat.php" target='frame2' onmouseover="Over(this)" onmouseout="Out(this)"><img src="desk-chair.png" ><p>Seat</p></a>
<a href=".php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="a-mark.png" ><p>Score</p></a>
<a href="edit_profile.php" target="frame2" onmouseover="Over(this)" onmouseout="Out(this)"><img src="edit.png" ><p>Edit Profile</p></a>

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
