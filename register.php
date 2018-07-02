<html>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>

  body,h1{font-family: "raleway", sans-serif
  font-weight: bold;}

  body {
      background-image: url("tmt1.jpeg");
  }

  img {
      display: block;
      margin-left: auto;
      margin-right: auto;
  }



  h1 {font-size:60px;
      margin-top: 50px;
      margin-bottom: 30px;
      font-weight: bold;
      color: white;
  }

  h2{
      color: white;
      font-size:18px;
  }

  p1 {
  	font-family: "raleway", sans-serif;
  	font-size:15px;
  	text-align:center;
  }

  #bd {width: 360px;
      border: 3px solid red;
      padding: 20px;
      border-radius: 25px;
      text-align: left;
      background-color: white;
      background-color: rgba(255,255, 255, 0.2);
  }

  input[type=submit] {
      width: 100px;
      height: 45px;
      background-color: #f44336;
      color: white;
      padding: 15px 20px;
      margin: 8px 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
  }

  input[type=text] {
      width: 300px;
      height: 15px;
      padding: 12px;
      margin: 8px 5px;
      box-sizing: border-box;
      border: 2px solid red;
      border-radius: 4px;
    }

    input[type=password] {
        width: 300px;
        height: 15px;
        padding: 12px;
        margin: 8px 5px;
        box-sizing: border-box;
        border: 2px solid red;
        border-radius: 4px;
      }


        a:link {
          color: black;
          text-decoration: none;
          display: inline-block;

        }

        a:visited {
          color: black;
          text-decoration: none;
          display: inline-block;
        }
  a{
    color: #f44336;
  }

  input[type=submit]:hover {
      background-color: rgba(255, 0, 0, 0.2);
  }

  </style>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

  <center>
  <h1>Register To <a>Ketchup</a></h1>
<form name="form1" method="post" action="save_register.php" >
  <div id="bd">
  <h2>
  &nbsp;Username<br><input name="txtUsername" type="text" id="txtUsername" ><br>
  &nbsp;Password<br><input name="txtPassword" type="password" id="txtPassword" ><br>
  &nbsp;Confirm Password<br><input name="txtConPassword" type="password" id="txtConPassword" ><br>
  &nbsp;Name<br><input name="txtName" type="text" id="txtName" ><br>
  &nbsp;Student ID<br><input name="stu_id" type="text" id="stu_id" ><br>
  &nbsp;Status<br></h2>
          <select name="ddlStatus" id="ddlStatus">
            <option value="USER">Student</option>
            <option value="ADMIN">Teacher</option>
          </select>
  <br>


  <input type="submit" name="Submit" value="Register" ></center>
  </div>
</form>
</center>
</body>
</html>
