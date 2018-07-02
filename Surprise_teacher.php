<?php


include ("config.php");
$sql = "SELECT MAX(UserID) AS max FROM member WHERE Status = 'USER'";
$result = mysqli_query($objCon, $sql);
$row = mysqli_fetch_array($result);
$largestNumber = $row['max'];

for($i =0;$i <50;$i++){
    $abc = rand($largestNumber,1);
    //echo $abc;
    $sql = "SELECT stu_id  FROM member WHERE Status = 'USER' AND UserID = $abc ";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $number = $row["stu_id"];
    //echo $number;
    if($number != NULL){
        $sql = "UPDATE utility SET number = $number WHERE id = '1'" ;
        $objQuery = mysqli_query($objCon,$sql);
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>

  button {  width: 150px;
    height: 40px;
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
  }

  p{ font-family: "raleway", sans-serif;
  font-size: 50px;
  margin-top: 40px;
  font-weight: bold;
  }

  #bd {width:450px;
      height:450px;
      border: 3px solid #f33446;
      padding: 20px;
      border-radius: 25px;
      background-color: white;
      margin-top: 120px;
  }

  </style>

  <body>
<center>


<div id="bd">
<img src="warning.png" style="margin-top:45px;margin-bottom:20px;"><br>
<button id="start">Random</button>

<p id="demo" > </p>

<script type="text/javascript">

document.getElementById("start").onclick = showNum;

function showNum(){
  var ranNum = <?=$number?>;
  document.getElementById("demo").innerHTML = ranNum;
}

</script>


</center>
</div>

  </body>
</html>
