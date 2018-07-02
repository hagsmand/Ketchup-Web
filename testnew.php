<?php
$objConnect = mysql_connect("webservhost","aaaaa_aaa","attasit") or die("Error Connect to Database");
$objDB = mysql_select_db("aaaaa_ameen");
ob_start();
session_start();
$stu_id = $_SESSION["stu_id"];
$course_no = $_SESSION["course_no"];
$name = $_SESSION["Name"];
date_default_timezone_set("Asia/Bangkok");



if($_GET["Action"] == "Save")
{
//*** Insert Question ***//
$strSQL = "INSERT INTO webboard ";
$strSQL .="(CreateDate,Question,Details,Name,View,Reply,course_no,stu_id) ";
$strSQL .="VALUES ";
$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','$name','0','0',$course_no,$stu_id) ";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
header("location:testkratoo.php");
}
?>
<html>
<head>
<title>Webboard</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


body,h1{font-family: "raleway", sans-serif
font-weight: bold;}

h1 {font-size:60px;
    margin-top: 5%;
    font-weight: bold;
}

table{
    border-collapse:separate;
		padding: 2px;
    border:2px  solid #f44336;
    border-radius:10px;
    -moz-border-radius:10px;
    background-color:white;
    width:65% ;
    height:70%;
}
tr,td{
  font-family: "raleway", sans-serif;
  font-size:20px;
  font-weight: bold;
  padding: 0px;
  margin-top:2% ;
	border:5px solid white;
}

tr:nth-child(even){background-color: rgba(255, 0, 0, 0.05)}

input[type=submit] {
    width: 150px;
    height: 30px;
    background-color: #f44336;
    color: white;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type=text] {
    width: 300px;
    height: 15px;
    padding: 12px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid gray;
    border-radius: 4px;
		font-size: 16px;
		font-weight: lighter;
  }

	textarea{
		margin: 8px 0;
		height: 200px;
    box-sizing: border-box;
    border: 1px solid gray;
    border-radius: 4px;
		font-size: 16px;
		font-weight: lighter;
	}

      a:link {font-weight: bold;
        text-decoration: none;
        display: inline-block;

      }

      a:visited {font-weight: bold;
        text-decoration: none;
        display: inline-block;
      }

      input[type=submit]:hover {
          background-color: rgba(255, 0, 0, 0.2);
      }



</style>


<body>
	<center>

		<h1>Create New Topic</h1>
		<hr style="margin-top: 0px;width:300px;border:5px solid #f44336" class="w3-round">

<form action="testnew.php?Action=Save" method="post" name="frmMain" id="frmMain">

<table width="600" border="1" cellpadding="1" cellspacing="1">

<tr>
<td> <img src="question.png" width="25px" height="25px">  Question</td>
<td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
</tr>

<tr>
<td> <img src="content.png" width="25px" height="25px">  Content</td>
<td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails" ></textarea></td>
</tr>

<tr>
<td> <img src="nameid.png" width="25px" height="25px">  Name</td>
<td width="647"><?php echo $name ; ?></td>
</tr>

<tr>
<td> <img src="nameid.png" width="25px" height="25px">  Student ID</td>
<td width="647"><?php echo $stu_id ; ?></td>
</tr>

</table>

<input name="btnSave" type="submit" id="btnSave" value="Submit">

</form>
</center>


</body>
</html>
