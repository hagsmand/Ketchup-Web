<?php
include 'config.php';
if ($objCon) {
  echo "database is connected";

}else {
  echo "failes";

}
mysqli_close($objCon);

 ?>
