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
//*** Insert Reply ***//
$strSQL = "INSERT INTO reply ";
$strSQL .="(QuestionID,CreateDate,Details,Name,course_no) ";
$strSQL .="VALUES ";
$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','$name','$course_no') ";
$objQuery = mysql_query($strSQL);
//*** Update Reply ***//
$strSQL = "UPDATE webboard SET Reply = Reply + 1 WHERE course_no = $course_no AND QuestionID = '".$_GET["QuestionID"]."'  ";
$objQuery = mysql_query($strSQL) ;
}
?>

<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


body,h1,h3{font-family: "raleway", sans-serif
font-weight: bold;
}

h1 {font-size:40px;
    font-weight: bold;
		margin-top: 0px;
		color: #f44336;
}

h2 {
    font-family: "raleway", sans-serif
    font-size:25px;
    font-weight: bold;

}

h3 {
  font-size:16px;
	text-align: left;
	margin-left: 13%;
}

      a:link {font-weight: bold;
        text-decoration: none;
        display: inline-block;
        text-align: right;
        font-size:18px;
        font-family: "raleway", sans-serif

      }

      a:visited {font-weight: bold;
        text-decoration: none;
        display: inline-block;
      }

#newtopic {
  margin-left: 90%;
  text-align: left;

}

table{
    border-collapse:separate;
    border:1px solid #f44336;
    background-color:white;
    width:75% ;
}
tr,td{
  font-family: "raleway", sans-serif;
  font-size:16px;
  padding: 0px;
  height: 30px;
  margin-top:2% ;
	border:1px solid white;
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

a:link {font-weight: bold;
	text-decoration: none;
	display: inline-block;

}

a:visited {font-weight: bold;
	text-decoration: none;
	display: inline-block;
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

input[type=submit]:hover {
		background-color: rgba(255, 0, 0, 0.2);
}

	rp {
		font-family: "raleway", sans-serif;
	  font-size:20px;
	  font-weight: bold;
	  padding: 0px;
	  margin-top:2% ;
	}

}

</style>

<head>
<title>Webboard</title>
</head>

<body>

<?php
//*** Select Question ***//
$strSQL = "SELECT * FROM webboard WHERE course_no = $course_no AND QuestionID = '".$_GET["QuestionID"]."'";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery)  or die(mysql_error());
//*** Update View ***//
$strSQL = "UPDATE webboard SET View = View + 1 WHERE course_no = $course_no AND QuestionID = '".$_GET["QuestionID"]."' ";

$objQuery = mysql_query($strSQL) ;
?>

<center>

<table width="738" border="1" cellpadding="1" cellspacing="1" style="margin-top:5%" >


<tr>
	<td height="53" colspan="2"><h1><?php echo $objResult["Question"];?></h1><br><?php echo($objResult["Details"]);?></td>
</tr>

<tr>
	<td width="397">&nbsp;Name : <?php echo $objResult["Name"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Create Date : <?php echo $objResult["CreateDate"];?></td>
	<td width="253">&nbsp;Views : <?php echo $objResult["View"];?>&nbsp;&nbsp;&nbsp;&nbsp;Reply : <?php echo $objResult["Reply"];?></td>
</tr>

</table>

<br>

<?php
$intRows = 0;
$strSQL2 = "SELECT * FROM reply WHERE course_no = $course_no AND QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysql_fetch_array($objQuery2))
{
$intRows++;
?>

<h3> Comment <?php echo $intRows;?></h3>


<table width="738" border="1" cellpadding="1" cellspacing="1">

<tr>
	<td height="53" colspan="2"><?php echo($objResult2["Details"]);?></td>
</tr>

<tr>
	<td width="397">&nbsp;Name :
		<?php echo $objResult["Name"];?></td>
	<td width="253">&nbsp;Reply Date :
		<?php echo $objResult2["CreateDate"];?></td>
</tr>

</table>


<?php
}
?>


<br>

<form action="testviewkratoo.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">

<table width="738" border="1" cellpadding="1" cellspacing="1">

<tr>
	<td width="78"><img src="content.png" width="25px" height="25px"><rp>  Details</rp></td>
	<td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
</tr>

<tr>
	<td width="78"><img src="nameid.png" width="25px" height="25px"><rp>  Name</rp></td>
	<td width="647"><?php echo $name ; ?></td>
</tr>

</table>

<input name="btnSave" type="submit" id="btnSave" value="Submit">

</form>

<a href="testkratoo.php" onmouseover="Over(this)" onmouseout="Out(this)" >Back to Webboard</a>

<script type="text/javascript">

	function Over(x) {
		x.style.color = "#f44336";
	}
	function Out(x){
		x.style.color = "black";
	}

</script>

</center>
</body>
</html>

<?php
mysql_close($objConnect);
?>
