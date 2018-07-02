<?php
@session_start();
include('config.php');

date_default_timezone_set('Asia/Bangkok');

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}

$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $timestamp = time();
}

$today = date('Y-m-j', time());

$html_title = date('m / Y', $timestamp);
$month = date('m', $timestamp);
$year = date('Y', $timestamp);

$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

$day_count = date('t', $timestamp);

$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

$weeks = array();
$week = '';
$d = 1;

$week .= str_repeat('<td></td>', $str);

for ($day = 1; $day <= $day_count ; $day++, $str++) {

$id = $year.$month.$d;
$stu_id = "44444444";

$strSQL = "SELECT events FROM calendar WHERE id = '$id' AND user_id ='$stu_id'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
  if($objResult){
    $nowEvent = $objResult["events"];
  }
  else {
    $nowEvent = "";
  }

    $date = $ym.'-'.$day;

    if ($today == $date) {
        $week .= '<td class="today" onclick="myFunction('.$id.','.$d.','.$month.','.$year.',\''.$nowEvent.'\');">'.$day.'<div id='.$id.'>'.$nowEvent.'</div>';
         $d++;
    }
    else {
        $week .= '<td onclick="myFunction('.$id.','.$d.','.$month.','.$year.',\''.$nowEvent.'\');">'.$day.'<div id='.$id.'>'.$nowEvent.'</div>';
         $d++;
    }
    $week .= '</td>';

    if ($str % 7 == 6 || $day == $day_count) {
        if($day == $day_count) {
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>'.$week.'</tr>';
        $week = '';
    }
}
?>
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
<html lang="ja">
<head>

  <script>
    function myFunction(id,d,m,y,e)
     {
        lastEvent = e;
        var Myevent = prompt("Please add your event on "+d+"/"+m+"/"+y+":", lastEvent);
            document.getElementById(id).innerHTML = Myevent;
            if(Myevent){
                load(id,Myevent);
            }
            else if (Myevent == "" ) {
              document.getElementById(id).innerHTML = "";
                load(id,Myevent);
            }
            else {
              document.getElementById(id).innerHTML = lastEvent;
            }
     }

  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    function load(id,Myevent)
    {
      var events = Myevent;
      var idm = id;

      $.ajax
      ({
        type: 'post',
        url: 'calendar_event.php',
        data:
        {
         user_add:events,
         id_date:idm
        },
        success: function (response)
        {
          window.location.reload();
        }
      });
      return false;
    }

  </script>

    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <style>
        th {
            height: 5%;
	          width:12%;
            text-align: center;
        }
        td {
            height: 15%;
            width:12%;
	          padding: 5px;
	          vertical-align: top;
        }
        .today {
            background: #f44336;
        }

        h {
          font-size: 40px;
        }

        div {
          width:100%;
          font-size: 13px;
          border: 0px solid black;
          background-color: rgb(255, 99, 71);
        }

        table{
            border-collapse:collapse;
            border-spacing: 0px;
            background-color:white;
            width:84%;
            height:85%;
            border-color: gray;
        }
        a:link {
          font-weight: bold;
          color: #f44336;
          text-decoration: none;
          display: inline-block;
        }

        a:visited {
          font-weight: bold;
          color: Tomato;
          text-decoration: none;
          display: inline-block;}

        .showevent
        {
          font-weight: bold;
        }


    </style>

</head>
<body>
    <h><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title;?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h>
    <br>
    <center>
    <table border="1" border-color="gray">
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <?php
        foreach ($weeks as $week) {
            echo $week;
        }
        ?>
    </table>
</center>
</body>
</html>
