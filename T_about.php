<!DOCTYPE html>
<html>
<head>
<style>

table {
    border-collapse:separate;
    border:5px solid red;
    border-radius:10px;
    -moz-border-radius:10px;
    background: white;
    padding: 20px;
    width: 50%;
    height: 50%;
}
td, th {
      padding: 15px;
}

tr:hover {background-color:solid red ;
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
<body><center>
  <div style="margin-top:75px;">
<table>
  <tr>
    <td><center><a href=".php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="desk-chair.png" ><p>Seat</p></a></center></td>
      <td><center><a href=".php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="a-mark.png" ><p>Score</p></a></center> </td>
  </tr>
  <tr>
    <td><center><a href=".php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="graduate.png" ><p>Student list</p></a></center> </td>
    <td><center><a href=".php" target="frame2" class="img" onmouseover="Over(this)" onmouseout="Out(this)"><img src="icon.png" ><p>Alert list</p></a></center> </td>
  </tr>
</table>

<br>
<a href="selectsubject.php" target="_top" onmouseover="Over(this)" onmouseout="Out(this)"><p>Select Subject</p></a>

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
