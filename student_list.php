<html>
<?php
include ("config.php");
$strSQL = "SELECT * FROM  member";
$objQuery = mysqli_query($objCon,$strSQL);
$num_roe =mysqli_num_rows($objQuery);




for ($i =0 ;$i <=100 ;$i++) {
    $sql = "SELECT stu_id,Name,sit_po,login_time,logout_time,online  FROM member WHERE UserID = $i AND Status = 'USER'";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $id[$i] =$row["stu_id"];
    $name[$i] =$row["Name"];
    $sit_po[$i] =$row["sit_po"];
    $login_time[$i] =$row["login_time"];
    $logout_time[$i] =$row["logout_time"];
    $online[$i] = $row["online"];


}for ($i =0 ;$i <=100 ;$i++) {
    $sql = "SELECT vote_no FROM compettitive WHERE id = $id[$i] ";
    if($id[$i] != "") {
        $result = mysqli_query($objCon, $sql);
        $row = mysqli_fetch_assoc($result);
        $score[$i] = $row["vote_no"];

        $j = 1;
    }else{
        $j = 1;
    }
}
function checkstatus($online){
 if($online == 1) {
        echo '<img src="tomato_icon_red.png" width="20" height="20">';
    } else {
        echo '<img src="tomato_icon_black.png" width="20" height="20">';
    }
    }

mysqli_close($objCon);
?>

<style>
body {background-image: url("0.png");
      background-color: rgba(255,255,255,0.5);
}
table{
    border-collapse:separate;
    border:2px solid red;
    border-radius:10px;
    -moz-border-radius:10px;
    background-color:white;
    padding: 20px;
    width:75% ;
    height:70px;
}
tr,td,h1{
  font-family: "raleway", sans-serif;
  font-size:16px;
  text-align:center;
  font-weight: bold;
  color: #944350;
    padding: 0px;
    margin-top:5px ;
}

tr:nth-child(even){background-color: rgba(255, 0, 0, 0.05)}

.top{
font-size:20px;
}

h1{
  font-family: "raleway", sans-serif;
  font-size:50px;
  text-align:center;
  font-weight: bold;
  color:#f44336;
}
.button {
  font-family: "raleway", sans-serif;
   border-radius:10px;
  -moz-border-radius:10px;
  background-color: #f44336;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 15px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
</html>
</style>
<body >
<p>
  <div style="margin-top:75px;">
  <center>
<table>

  <h1>  Student Status</h1>
    <tr align = "center" style="margin-top:0px;margin-bottom:0px;" >
        <td class="top">ID</td>
        <td class="top">Name</td>
        <td class="top">Score</td>
        <td class="top">Sit Position</td>
        <td class="top">Login Time</td>
        <td class="top">Logout Time</td>
        <td class="top">Status</td>
    </tr>
<?php for ($z=0;$z<=100;$z++){
    if($id[$j]!= 0){?>
                <tr align = "center">
                    <td><?php echo $id[$j]?></td>
                    <td><?php echo $name[$j]?></td>
                    <td><?php echo $score[$j]?></td>
                    <td><?php echo $sit_po[$j]?></td>
                    <td><?php echo $login_time[$j]?></td>
                    <td><?php echo $logout_time[$j]?></td>
                    <td><?php checkstatus($online[$j])?></td>
                         <?php $j++;

}else{
        $j++;
    }
?>

        </td>
    </tr>
<?php }?>

</table>

<script type="text/javascript">

  function thanks(){
      alert ("Thanks for your vote\<3");
  }


 </script>

</body>

</html>
