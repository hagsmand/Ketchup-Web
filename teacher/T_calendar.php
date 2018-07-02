<?php
// Set your timezone!!
date_default_timezone_set('Asia/Bangkok');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $timestamp = time();
}

// Today
$today = date('Y-m-j', time());

// For H3 title
$html_title = date('m / Y', $timestamp);
$month = date('m', $timestamp);
$year = date('Y', $timestamp);

// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// Number of days in the month
$day_count = date('t', $timestamp);

// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

// Create Calendar!!
$weeks = array();
$week = '';
$d = 1;

// Add empty cell
$week .= str_repeat('<td></td>', $str);

for ($day = 1; $day <= $day_count ; $day++, $str++) {

$id = $year.$month.$d;

    $date = $ym.'-'.$day;

    if ($today == $date) {
        $week .= '<td class="today"  onclick="myFunction('.$id.','.$d.','.$month.','.$year.');">'.$day.'<div id='.$id.'></div>';
         $d++;
    } else {
        $week .= '<td onclick="myFunction('.$id.','.$d.','.$month.','.$year.');">'.$day.'<div id='.$id.'></div>';
         $d++;
    }
    $week .= '</td>';

    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
        if($day == $day_count) {
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>'.$week.'</tr>';
        $week = '';
    }
}
?>

<html lang="ja">
<head>
  <script>
    function myFunction(id,d,m,y) {
        var Myevent = prompt("Please add your event on "+d+"/"+m+"/"+y+":", "This day has important event");
        document.getElementById(id).innerHTML = Myevent;
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
          display: inline-block;
        }

    </style>

</head>
<body>
    <h><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title;?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h>
    <br>
    <center>
    <table border="1" border-color="gray">
        <tr>
            <th>S</th>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
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
