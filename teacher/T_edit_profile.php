<?php
session_start();
include("config.php");
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

$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

    body,h1{font-family: "raleway", sans-serif
        font-weight: bold;}

    h1 {font-size:60px;
        margin-top: 50px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    table {
        border-radius:10px;
        -moz-border-radius:10px;
        border: 3px solid #f44336;
        margin-top: 10px;
        border-collapse:inherit;
        height: 50%;
    }

    tr, td {
        padding: 2px;
        text-align: center;
    }

    tr:nth-child(even){background-color: rgba(255, 0, 0, 0.05)}

    input[type=submit] {
        width: 100px;
        height: 30px;
        background-color: #f44336;
        color: white;
        margin: 8px 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type=button]{
        width: 100px;
        height: 30px;
        background-color: #f44336;
        color: white;
        margin: 1px 1px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


</style>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<center>
    <form name="form1" method="post" action="save_profile.php">
        <h1>Edit Profile</h1><br>
        <table width="400" border="1" style="width: 400px">
            <tbody>
            <tr>
                <td width="125"> &nbsp;UserID</td>
                <td width="180">
                    <?php echo $objResult["UserID"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;Username</td>
                <td>
                    <?php echo $objResult["Username"];?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;Password</td>
                <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>">
                </td>
            </tr>
            <tr>
                <td> &nbsp;Confirm Password</td>
                <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>">
                </td>
            </tr>
            <tr>
                <td>&nbsp;Name</td>
                <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["name"];?>"></td>
            </tr>
            <tr>
<!--                <td>&nbsp;Seat Position</td>-->
<!--                <td>--><?php //echo $objResult["sit_po"];?><!-- <input type="button" value="edit seat" onclick="window.location.href='S_seat.php'"/></td>-->
<!--            </tr>-->
            <!--      <tr>-->
            <!--          <td>&nbsp;student ID</td>-->
            <!--          <td><input name="number" type="text" id="number" value="--><?php //echo $objResult["stu_id"];?><!--"></td>-->
            <!--      </tr>-->
<!--            <tr>-->
                <td> &nbsp;Status</td>
                <td>
                    <?php echo $objResult["Status"];?>
                </td>
            </tr>
            <tr>
                <input type="button" value="add class" onclick="window.location.href='add_subject.php'" />
                <br>
            </tr>
            </tbody>
        </table>
        <input type="submit" name="Submit" value="Save">
</center>
</form>
</body>
</html>
<?php
mysqli_close($objCon);
?>
