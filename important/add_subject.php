<?php
session_start();
function alert($al){
    echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='login.php';
		</script>";
    exit();
}
if($_SESSION['UserID'] == "")
{
    alert("Please Login!");
}
?>
<html>
<style>
    input[type=submit] {
        width: 100px;
        height: 30px;
        background-color: #f44336;
        color: white;
        margin: 10px 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    h1{
        font-size:60px;
        margin-top: 50px;
        margin-bottom: 10px;
        font-weight: bold;
    }
    a{
        font-size:60px;
        margin-top: 50px;
        margin-bottom: 10px;
        font-weight: bold;
        color: red;
    }
    #bd {width: 350px;
        border: 3px solid red;
        padding: 20px;
        border-radius: 25px;
        background-color: white;
        background-color: rgba(255,255, 255, 0.2);
        margin-top: 50px;
    }
    input[type=submit]:hover {
        background-color: rgba(255, 0, 0, 0.2);
    }
    m {
        font-family: "raleway", sans-serif;
        font-size: 30px;
        color: black;
        margin-bottom: 20px;
    }
    select{
        font-family: "raleway", sans-serif;
        font-size: 20px;
        color: black;
        margin-bottom: 20px;
        margin-top: 20px;

    }

</style>
<body>

  <center>
      <h1><a>Ketchup</a></h1>
<form name="form1" method="post" action="add_subject_back.php">
  <div id="bd">
  <h2>

<m>Subject</m><br>
      <select name="subject" id="subject">
          <option value="1">webtech</option>
          <option value="2">telecom</option>
          <option value="3">coding</option>
          <option value="4">english</option>
          <option value="5">database</option>
          <option value="6">ilovekmitl</option>
      </select>
      <br>
<m>Section</m><br>
      <select name="sec" id="sec">
          <option value="1">Sec 1</option>
          <option value="2">Sec 2</option>

      </select>
      <br>


  <input type="submit" name="Submit" value="Register" ></center>
  </div>
</form>
</center>
</body>
</html>
