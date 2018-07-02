<?php
@session_start();
include("config.php");
$course = $_SESSION["course_no"];
$stuID = $_POST["stu_id"];

$sql = "DELETE FROM queue WHERE course_no = '$course' AND stu_id = '$stuID'";

if (mysqli_query($objCon,$sql)) {
    if($_SESSION["Status"] == "ADMIN"){
        header("location:T_queue.php");
    }
    else{
        header("location:S_queue_button.php");
    }
} else {
  echo "have some error HERE";
}

session_write_close();
mysqli_close($objCon);
 ?>

<?php
if($_POST['id_pdf']) {

    $pdf_id = $_POST['id_pdf'];

    echo

    $strSQL = "SELECT file_name FROM pdf WHERE id ='".$pdf_id."' ";
    $objQuery = mysqli_query($objCon, $strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    $file_name = $objResult["file_name"];

    $strSQL = "DELETE FROM pdf WHERE id = '".$pdf_id."' ";
    $objQuery = mysqli_query($objCon, $strSQL);

    $file = $file_name;
    if (!unlink($file)) {
        echo "Error deleting ".$file;
    } else {
        echo "Deleted".$file;
    }
}

?>