<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1{font-family: "raleway", sans-serif
font-weight: bold;}

h1{font-size:60px;}

h1 {
    margin-top: 110px;
    margin-bottom: 20px;
    font-weight: bold;
}


p1 {
	font-family: "raleway", sans-serif;
	font-size:15px;
	text-align:center;
}

#bd {width: 50%;
    border: 3px solid red;
    padding: 20px;
    border-radius: 25px;
}

input[type=submit] {
    width: 20%;
    height: 50px;
    background-color: #f44336;
    color: white;
    padding: 15px 20px;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>

<body>
<form name="Compete" method="post" action="compettitive_back.php">
  <center>
  <h1>Compete<br></h1>
  <hr style=" margin-bottom:40px; width:300px;border:5px solid #f44336" class="w3-round">
  <div id="bd">
  <p1>
  File Name : <input name="filename" type="text" id="txtFilename" size="45px"><br><br>
  Link : </p1><p1 style="margin-left: 43px;"><input name="link" type="text" id="txtLink" size="45px"></p1>
  <br><br>
  <p1>
  <input type="submit" name="Submit" value="Submit">
  </div>
  </p1>
  <br>
  <img src="competitive.png" >
</center>
</form>


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
