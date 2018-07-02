<?php
session_start();
include("config.php");
  $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);

$Row = array('A','B','C','D','E','F','G','H','I','J','K','L','M','O','P','Q','R','S','T','U','V','W','X','Y','Z');

for ($i=0; $i < 8 ; $i++) {
    for ($j=0; $j < 20; $j++) {
        $var[$i][$j] = $Row[$i];
        $var[$i][$j] .= $j+1;
    }
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>Queue</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <style>
    td {
    	border: 0px solid black;
    	text-align: center;
    		}
    table {
	    padding: 5%;
    	border-spacing: 12px;
    	table-layout:fixed;
    	}
    input[type=submit] {
    width: 40px;
    background-color: rgba(255, 0, 0, 0.8);
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

input[type=submit]:hover {
    background-color: rgba(255, 0, 0, 0.2);
}

body,h1{font-family: "raleway", sans-serif
font-size 8px;
}

      </style>

  </head>
  <body>

<form method="post" action="save_seat.php">
    <table style="width:100%">

      <tr style="boder:1px" >
        <td colspan = 21  style="border: 1px solid black;"> This is Front Board <br> Hi, <?php echo $objResult["Name"]; ?> Please select your seat from the left of the first row </td>
      </tr>

    	<tr>
    			<td></td>
    			<td>1</td>
          <td>2</td>
    			<td>3</td>
    			<td>4</td>
    			<td>5</td>
    			<td>6</td>
    			<td>7</td>
    			<td>8</td>
    			<td>9</td>
    			<td>10</td>
    			<td>11</td>
    			<td>12</td>
    			<td>13</td>
    			<td>14</td>
    			<td>15</td>
    			<td>16</td>
    			<td>17</td>
    			<td>18</td>
    			<td>19</td>
    			<td>20</td>
    		</tr>

    	<tr>
			<td>A</td>
    			<td><input type="submit" name="sitPosition" value="A1"></td>
    			<td><input type="submit" name="sitPosition" value="A2"></td>
    			<td><input type="submit" name="sitPosition" value="A3"></td>
    			<td><input type="submit" name="sitPosition" value="A4"></td>
    			<td><input type="submit" name="sitPosition" value="A5"></td>
    			<td><input type="submit" name="sitPosition" value="A6"></td>
    			<td><input type="submit" name="sitPosition" value="A7"></td>
    			<td><input type="submit" name="sitPosition" value="A8"></td>
    			<td><input type="submit" name="sitPosition" value="A9"></td>
    			<td><input type="submit" name="sitPosition" value="A10"></td>
    			<td><input type="submit" name="sitPosition" value="A11"></td>
    			<td><input type="submit" name="sitPosition" value="A12"></td>
    			<td><input type="submit" name="sitPosition" value="A13"></td>
    			<td><input type="submit" name="sitPosition" value="A14"></td>
    			<td><input type="submit" name="sitPosition" value="A15"></td>
    			<td><input type="submit" name="sitPosition" value="A16"></td>
    			<td><input type="submit" name="sitPosition" value="A17"></td>
    			<td><input type="submit" name="sitPosition" value="A18"></td>
    			<td><input type="submit" name="sitPosition" value="A19"></td>
    			<td><input type="submit" name="sitPosition" value="A20"></td>
    		</tr>

    	<tr>
			<td>B</td>
    			<td><input type="submit" name="sitPosition" value="B1"></td>
    			<td><input type="submit" name="sitPosition" value="B2"></td>
    			<td><input type="submit" name="sitPosition" value="B3"></td>
    			<td><input type="submit" name="sitPosition" value="B4"></td>
    			<td><input type="submit" name="sitPosition" value="B5"></td>
    			<td><input type="submit" name="sitPosition" value="B6"></td>
    			<td><input type="submit" name="sitPosition" value="B7"></td>
    			<td><input type="submit" name="sitPosition" value="B8"></td>
    			<td><input type="submit" name="sitPosition" value="B9"></td>
    			<td><input type="submit" name="sitPosition" value="B10"></td>
    			<td><input type="submit" name="sitPosition" value="B11"></td>
    			<td><input type="submit" name="sitPosition" value="B12"></td>
    			<td><input type="submit" name="sitPosition" value="B13"></td>
    			<td><input type="submit" name="sitPosition" value="B14"></td>
    			<td><input type="submit" name="sitPosition" value="B15"></td>
    			<td><input type="submit" name="sitPosition" value="B16"></td>
    			<td><input type="submit" name="sitPosition" value="B17"></td>
    			<td><input type="submit" name="sitPosition" value="B18"></td>
    			<td><input type="submit" name="sitPosition" value="B19"></td>
    			<td><input type="submit" name="sitPosition" value="B20"></td>
    		</tr>

    	<tr>
    	<td>C</td>
          <td><input type="submit" name="sitPosition" value="C1"></td>
    			<td><input type="submit" name="sitPosition" value="C2"></td>
    			<td><input type="submit" name="sitPosition" value="C3"></td>
    			<td><input type="submit" name="sitPosition" value="C4"></td>
    			<td><input type="submit" name="sitPosition" value="C5"></td>
    			<td><input type="submit" name="sitPosition" value="C6"></td>
    			<td><input type="submit" name="sitPosition" value="C7"></td>
    			<td><input type="submit" name="sitPosition" value="C8"></td>
    			<td><input type="submit" name="sitPosition" value="C9"></td>
    			<td><input type="submit" name="sitPosition" value="C10"></td>
    			<td><input type="submit" name="sitPosition" value="C11"></td>
    			<td><input type="submit" name="sitPosition" value="C12"></td>
    			<td><input type="submit" name="sitPosition" value="C13"></td>
    			<td><input type="submit" name="sitPosition" value="C14"></td>
    			<td><input type="submit" name="sitPosition" value="C15"></td>
    			<td><input type="submit" name="sitPosition" value="C16"></td>
    			<td><input type="submit" name="sitPosition" value="C17"></td>
    			<td><input type="submit" name="sitPosition" value="C18"></td>
    			<td><input type="submit" name="sitPosition" value="C19"></td>
    			<td><input type="submit" name="sitPosition" value="C20"></td>
    		</tr>

    	<tr>
			<td>D</td>
    			<td><input type="submit" name="sitPosition" value="D1"></td>
    			<td><input type="submit" name="sitPosition" value="D2"></td>
    			<td><input type="submit" name="sitPosition" value="D3"></td>
    			<td><input type="submit" name="sitPosition" value="D4"></td>
    			<td><input type="submit" name="sitPosition" value="D5"></td>
    			<td><input type="submit" name="sitPosition" value="D6"></td>
    			<td><input type="submit" name="sitPosition" value="D7"></td>
    			<td><input type="submit" name="sitPosition" value="D8"></td>
    			<td><input type="submit" name="sitPosition" value="D9"></td>
    			<td><input type="submit" name="sitPosition" value="D10"></td>
    			<td><input type="submit" name="sitPosition" value="D11"></td>
    			<td><input type="submit" name="sitPosition" value="D12"></td>
    			<td><input type="submit" name="sitPosition" value="D13"></td>
    			<td><input type="submit" name="sitPosition" value="D14"></td>
    			<td><input type="submit" name="sitPosition" value="D15"></td>
    			<td><input type="submit" name="sitPosition" value="D16"></td>
    			<td><input type="submit" name="sitPosition" value="D17"></td>
    			<td><input type="submit" name="sitPosition" value="D18"></td>
    			<td><input type="submit" name="sitPosition" value="D19"></td>
    			<td><input type="submit" name="sitPosition" value="D20"></td>
    		</tr>

    	<tr>
			<td>E</td>
    			<td><input type="submit" name="sitPosition" value="E1"></td>
    			<td><input type="submit" name="sitPosition" value="E2"></td>
    			<td><input type="submit" name="sitPosition" value="E3"></td>
    			<td><input type="submit" name="sitPosition" value="E4"></td>
    			<td><input type="submit" name="sitPosition" value="E5"></td>
    			<td><input type="submit" name="sitPosition" value="E6"></td>
    			<td><input type="submit" name="sitPosition" value="E7"></td>
    			<td><input type="submit" name="sitPosition" value="E8"></td>
    			<td><input type="submit" name="sitPosition" value="E9"></td>
    			<td><input type="submit" name="sitPosition" value="E10"></td>
    			<td><input type="submit" name="sitPosition" value="E11"></td>
    			<td><input type="submit" name="sitPosition" value="E12"></td>
    			<td><input type="submit" name="sitPosition" value="E13"></td>
    			<td><input type="submit" name="sitPosition" value="E14"></td>
    			<td><input type="submit" name="sitPosition" value="E15"></td>
    			<td><input type="submit" name="sitPosition" value="E16"></td>
    			<td><input type="submit" name="sitPosition" value="E17"></td>
    			<td><input type="submit" name="sitPosition" value="E18"></td>
    			<td><input type="submit" name="sitPosition" value="E19"></td>
    			<td><input type="submit" name="sitPosition" value="E20"></td>
    		</tr>

    	<tr>
			<td>F</td>
    			<td><input type="submit" name="sitPosition" value="F1"></td>
    			<td><input type="submit" name="sitPosition" value="F2"></td>
    			<td><input type="submit" name="sitPosition" value="F3"></td>
    			<td><input type="submit" name="sitPosition" value="F4"></td>
    			<td><input type="submit" name="sitPosition" value="F5"></td>
    			<td><input type="submit" name="sitPosition" value="F6"></td>
    			<td><input type="submit" name="sitPosition" value="F7"></td>
    			<td><input type="submit" name="sitPosition" value="F8"></td>
    			<td><input type="submit" name="sitPosition" value="F9"></td>
    			<td><input type="submit" name="sitPosition" value="F10"></td>
    			<td><input type="submit" name="sitPosition" value="F11"></td>
    			<td><input type="submit" name="sitPosition" value="F12"></td>
    			<td><input type="submit" name="sitPosition" value="F13"></td>
    			<td><input type="submit" name="sitPosition" value="F14"></td>
    			<td><input type="submit" name="sitPosition" value="F15"></td>
    			<td><input type="submit" name="sitPosition" value="F16"></td>
    			<td><input type="submit" name="sitPosition" value="F17"></td>
    			<td><input type="submit" name="sitPosition" value="F18"></td>
    			<td><input type="submit" name="sitPosition" value="F19"></td>
    			<td><input type="submit" name="sitPosition" value="F20"></td>
    		</tr>

        <tr>
        <td>G</td>
            <td><input type="submit" name="sitPosition" value="G1"></td>
            <td><input type="submit" name="sitPosition" value="G2"></td>
            <td><input type="submit" name="sitPosition" value="G3"></td>
            <td><input type="submit" name="sitPosition" value="G4"></td>
            <td><input type="submit" name="sitPosition" value="G5"></td>
            <td><input type="submit" name="sitPosition" value="G6"></td>
            <td><input type="submit" name="sitPosition" value="G7"></td>
            <td><input type="submit" name="sitPosition" value="G8"></td>
            <td><input type="submit" name="sitPosition" value="G9"></td>
            <td><input type="submit" name="sitPosition" value="G10"></td>
            <td><input type="submit" name="sitPosition" value="G11"></td>
            <td><input type="submit" name="sitPosition" value="G12"></td>
            <td><input type="submit" name="sitPosition" value="G13"></td>
            <td><input type="submit" name="sitPosition" value="G14"></td>
            <td><input type="submit" name="sitPosition" value="G15"></td>
            <td><input type="submit" name="sitPosition" value="G16"></td>
            <td><input type="submit" name="sitPosition" value="G17"></td>
            <td><input type="submit" name="sitPosition" value="G18"></td>
            <td><input type="submit" name="sitPosition" value="G19"></td>
            <td><input type="submit" name="sitPosition" value="G20"></td>
          </tr>

    </table>
</form>
  </body>
</html>

<?php
	mysqli_close($objCon);
?>
