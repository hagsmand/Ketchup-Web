<?php
session_start();
include("config.php");
date_default_timezone_set("Asia/Bangkok");
$course_no = $_SESSION["course_no"];

$sql = "SELECT name,comment,post_time FROM chat WHERE course_no = $course_no";
$result = mysqli_query($objCon, $sql);

while($row = mysqli_fetch_assoc($result)){

    $name = $row['name'];
    $comment = $row['comment'];
    $time = $row['post_time'];

    ?>
    <script> myFunction(); </script>
    <div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
    <?php
}
?>
