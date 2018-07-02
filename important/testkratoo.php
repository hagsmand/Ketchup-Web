<html>

<head>
<title>Webboard</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body,h1,h3{font-family: "raleway", sans-serif
font-weight: bold;
}

h1 {font-size:60px;
    margin-top: 2%;
    font-weight: bold;
    text-align: center;
}

h2 {
    font-family: "raleway", sans-serif
    font-size:25px;
    font-weight: bold;

}

h3 {
  font-size:16px;
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
	border:1px;
  background-color: rgba(255, 0, 0, 0.05)
}

tr:nth-child(even){background-color: white}

</style>


<body>

<a href="testnew.php" id="newtopic" onmouseover="Over(this)" onmouseout="Out(this)"><img src="content.png" width="25px" height="25px">  New Topic</a><br>

<h1>Topics 📚</h1>
<center><hr style="margin-top: 0px;width:150px;border:5px solid #f44336" class="w3-round">

<script type="text/javascript">

	function Over(x) {
		x.style.color = "#f44336";
	}
	function Out(x){
		x.style.color = "black";
	}

</script>

<?php

$objConnect = mysql_connect("webservhost","aaaaa_aaa","attasit") or die("Error Connect to Database");
$objDB = mysql_select_db("aaaaa_ameen");
ob_start();
@session_start();
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
$stu_id = $_SESSION["stu_id"];
$course_no = $_SESSION["course_no"];
$name = $_SESSION["Name"];
date_default_timezone_set("Asia/Bangkok");


$strSQL = "SELECT * FROM webboard WHERE course_no = $course_no";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);
$Per_Page = 10;   // Per Page
$Page = $_GET["Page"];

if(!$_GET["Page"])
{
$Page=1;
}
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);

if($Num_Rows<=$Per_Page)
  {
      $Num_Pages =1;
  }
else if(($Num_Rows % $Per_Page)==0)
  {
      $Num_Pages =($Num_Rows/$Per_Page) ;
  }
else
  {
    $Num_Pages =($Num_Rows/$Per_Page)+1;
    $Num_Pages = (int)$Num_Pages;
  }

$strSQL .=" order  by QuestionID DESC LIMIT   $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
?>


<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

<table width="" border="1">

<tr>
  <td height="70" colspan="3"><?=$objResult["QuestionID"];?>:
  <a href="testviewkratoo.php?QuestionID=<?php echo $objResult["QuestionID"];?>" onmouseover="Over(this)" onmouseout="Out(this)"><h2><?php echo $objResult["Question"];?></h2></a></td>
</tr>

<tr>

<td width="300">&nbsp;&nbsp; Name : <?php echo $objResult["Name"] ;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student ID :&nbsp;<?php echo $objResult["stu_id"] ;?></td><br>
<td width="250" align="center">Created : <?php echo $objResult["CreateDate"];?></td><br>
<td width="200">&nbsp;&nbsp; Views : <?php echo $objResult["View"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reply : <?php echo $objResult["Reply"];?></td>
</tr>

<?php
}
?>

</table>


<h3>Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :

<?php
if($Prev_Page)
{
  echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){

if($i != $Page)
{
  echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
}

else
{
  echo "<b> $i </b>";
}

}

if($Page!=$Num_Pages)
{
  echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}

mysql_close($objConnect);
?></h3>
</center>
</body>

</html>
