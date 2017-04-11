<?php

$hostname = "localhost";
$username = "root";
$password = "";

$dbConnected  = mysql_connect($hostname, $username, $password);

$dbSuccess = true;
if ($dbConnected) {
   }
  else {
    echo "MySQL connection FAILED<br>";
    $dbSuccess = false;
  }


if ($dbSuccess) {
  $dbName = "phpclass";
  $drop_SQL = "DROP DATABASE ".$dbName;

  if (mysql_query($drop_SQL)) {
    echo "'DROP DATABASE ".$dbName."' - Successful.";
  } else {
    echo "'DROP DATABASE ".$dbName."' - Failed.";
  }
}

 ?>
