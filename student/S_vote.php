<html>
<?php
@session_start();
$course_no = $_SESSION["course_no"];
include ("config.php");


$strSQL = "SELECT * FROM  compettitive";
$objQuery = mysqli_query($objCon,$strSQL);
$num_roe =mysqli_num_rows($objQuery);
//echo $num_roe;

for ($i =0 ;$i <=50 ;$i++) {
    $sql = "SELECT stu_id,name,file_name,link,date_time  FROM compettitive WHERE no = $i AND course_no = $course_no ";
    $result = mysqli_query($objCon, $sql);
    $row = mysqli_fetch_assoc($result);
    $id[$i] =$row["stu_id"];
    $name[$i] =$row["name"];
    $file_name[$i] =$row["file_name"];
    $link[$i] =$row["link"];
    $date_time[$i] =$row["date_time"];
    $j = 1;

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
    height:50px;
}
tr,td,h1{
  font-family: "raleway", sans-serif;
  font-size:16px;
  text-align:center;
  font-weight: bold;
  color: #944350;
}


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
a {
    color: #ff2549;
}
a:hover {
    color: rgba(47, 8, 1, 0.97);
}


.button:hover {opacity: 1}

tr:nth-child(even){background-color: rgba(255, 0, 0, 0.05)}

</style>
</html>

<body >
<p>
  <div style="margin-top:75px;">
  <center>
<table>

  <h1>  which one do you like?</h1>
    <tr align = "center">

        <td class="top">ID</td>
        <td class="top">Name</td>
        <td class="top">File Name</td>
        <td class="top">Link</td>
        <td class="top">Date / Time</td>
        <td class="top">Vote</td>
    </tr>
<?php for ($z=0;$z<=50;$z++){?>
        <?php if($id[$j] != ""){
        ?> <tr align = "center" >
        <td><?php echo $id[$j]?></td>
        <td><?php echo $name[$j]?></td>
        <td><?php echo $file_name[$j]?></td>
            <td><?php echo "<a href='".$link[$j]."' target=\"_blank\">".$link[$j]."</a>"?></td>
        <td><?php echo $date_time[$j]?></td>
        <td><form action="S_vote_back.php" method="post" name="form1">
                <input type="radio" name="vote" value="<?php echo($j) ?>"><br>
                <?php $j++ ;
                ?>
        </td>
    </tr>
    <?php }else{
            $j++;
    }?>
<?php }?>

</table>

<br>
<input name="btnSubmit" type="submit" value="Submit" class="button" >
</center>
</div>
</p>

<script type="text/javascript">




 </script>

</body>

</html>
