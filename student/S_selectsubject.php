<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body {
    background-image: url("tmt1.jpeg ");
}

body,h1{font-family: "raleway", sans-serif
font-weight: bold;}

h1 {font-size:60px;
    margin-top: 50px;
    margin-bottom: 30px;
    font-weight: bold;
}

p1 {
  font-family: "raleway", sans-serif;
  font-size:15px;
  text-align:center;
}


#bd {width: 350px;
    border: 3px solid red;
    padding: 20px;
    border-radius: 25px;
    background-color: white;
    background-color: rgba(255,255, 255, 0.2);
    margin-top: 250px;
}

input[type=submit] {
    width: 100px;
    height: 35px;
    background-color: #f44336;
    color: white;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

input[type=submit]:hover {
    background-color: rgba(255, 0, 0, 0.2);
}


m {
	font-family: "raleway", sans-serif;
	font-size:15px;
  color: white;
  margin-bottom: 20px;
}


</style>

<body>
<center>
<form name="form1" method="post" action="S_selectsubject_back.php">
  <div id="bd">
  &nbsp;<m>Subject</m><br>
          <select name="Subject" id="Subject">
            <option value="1">webtech</option>
            <option value="2">telecom</option>
            <option value="3">coding</option>
            <option value="4">english</option>
            <option value="5">database</option>
            <option value="6">ilovekmitl</option>
          </select>
  <br>
  &nbsp;<m>Sec</m><br>
          <select name="Section" id="Section">
            <option value="1">Sec 1</option>
            <option value="2">Sec 2</option>

          </select>
  <br>

  <input type="submit" name="Submit" value="Select" ></center>
  </div>
</form>
</center>

<script type="text/javascript">
	function Over(x) {
		x.style.color = "#f44336";
	}
	function Out(x){
		x.style.color = "white";
	}
</script>

</body>


</html>
