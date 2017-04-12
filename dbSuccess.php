<?php
$dbSuccess = true;
if ($dbConnected) {
  if(!$dbSelected) {
    echo "DB connection FAILED<Br>";
    $dbSuccess = false;
  }
} else {
  echo "MySQL connection FAILED<br>";
  $dbSuccess = false;
}
?>
