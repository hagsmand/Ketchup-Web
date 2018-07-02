<html>
<head>
</head>
<style>
#bd {width: 50%;
    border: 5px solid red;
    padding: 20px;
    border-radius: 25px;
    background-color: white;

    background-color: rgba(255,255, 255, 0.2);
}
input[type=submit] {
    width: 10%;
    height: 5%;
    background-color: #f44336;
    color: white;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
body,h1,h2{font-family: "Raleway", sans-serif}
body{
    background-image: url("06.jpeg");
		background-position: center;
		background-repeat: no-repeat;
    background-size: 100%,100%;

}
p1 {
	font-family: "raleway", sans-serif;
	font-size:30px;
	text-align:center;
}
</style>

<body>
<form method="post" action="announce_back.php" enctype="multipart/form-data">
	<center>
	<div id="bd" style="margin-top:15%;">

		<h1>  Please enter your announcement </h1>
		<p1>Comment: <input type="text" name="txtComment" id="txtComment" style="width: 70%; height: 20%;"></p1
		  <br>
		 <input type="submit" name="submit" value="Submit" style="margin-left:30%;">
		  <br>
	</div>
	</center>
</form>
</body>
</html>
