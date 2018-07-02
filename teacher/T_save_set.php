<?php
@session_start();
function alert($al){
    echo "<script type = 'text/javascript'>
		alert('$al');
		window.location.href ='T_set_room.php';
		</script>";
    exit();
}
include ("config.php");
$row = $_POST['row'];
$col = $_POST['col'];
$course_no = $_SESSION["course_no"];
if ($row == "" OR $row == "") {
    echo "<script type = 'text/javascript'>
		alert('You have to input the scale');
		window.location.href ='T_set_room.php';
		</script>";
}elseif ($row > 7 OR $col > 20){
    echo "<script type = 'text/javascript'>
		alert('Scale have to less than 7*20');
		window.location.href ='T_set_room.php';
		</script>";
}elseif ($row <= 0 OR $col <= 0) {
    echo "<script type = 'text/javascript'>
		alert('Scale must be more than Zero!');
		window.location.href ='T_set_room.php';
		</script>";
}else{

    $strSQL = "UPDATE subject SET row = '$row',col = '$col' WHERE course_no ='$course_no' ";
    $objQuery = mysqli_query($objCon, $strSQL);
    echo "<script type = 'text/javascript'>
		alert('Scale set complete!');
		window.location.href ='T_seat.php';
		</script>";
}

?>