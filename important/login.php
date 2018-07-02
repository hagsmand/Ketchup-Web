<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
    background-image: url("tmt1.jpeg ");
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
body,h1{font-family: "raleway", sans-serif
font-weight: bold;}

h1{font-size:60px;}

h1 {
    margin-top: 130px;
    margin-bottom: 50px;
    color: white;
    font-weight: bold;
}

p1 {
	font-family: "raleway", sans-serif;
	font-size:15px;
	text-align:center;
  color: white;
}
m {
	font-family: "raleway", sans-serif;
	font-size:15px;
  color: white;
}

#bd {width: 35%;
    border: 3px solid red;
    padding: 20px;
    border-radius: 25px;
    background-color: white;
    background-color: rgba(255,255, 255, 0.2);
}

input[type=submit] {
    width: 240px;
    height: 30px;
    background-color: #f44336;
    color: white;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type=text] {
    width: 150px;
    height: 15px;
    padding: 12px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }

  input[type=password] {
      width: 150px;
      height: 15px;
      padding: 12px;
      box-sizing: border-box;
      border: 2px solid red;
      border-radius: 4px;
    }


      a:link {font-weight: bold;
        color: white;
        text-decoration: none;
        display: inline-block;

      }

      a:visited {font-weight: bold;
        color: white;
        text-decoration: none;
        display: inline-block;
      }

      input[type=submit]:hover {
          background-color: rgba(255, 0, 0, 0.2);
      }


</style>

<body>
<form name="form1" method="post" action="check_login.php">
<article>
  <center>
  <div id="bd" style="margin-top:150px;">

    <img src="man.png" width="100" height="100">
  <p1>
    <br>
  Username : <input name="txtUsername" type="text" id="txtUsername" size="19%"><br><br>
  Password : <input name="txtPassword" type="password" id="txtPassword" size="20%">
  </p1>
  <br><br>

  <input type="submit" name="Submit" value="Login"><br>
  <m>No registered ?</m> <a href="register.php" target="_top" onmouseover="Over(this)" onmouseout="Out(this)">Create an account</a>
  </div>

</center>
<script type="text/javascript">
	function Over(x) {
		x.style.color = "#f44336";
	}
	function Out(x){
		x.style.color = "white";
	}
</script>

</form>
</body>
</html>
