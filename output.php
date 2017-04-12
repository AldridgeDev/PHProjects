<?php
include('testdb.php');
include('dbSuccess.php');

if($dbSuccess) {
  $personFirstName = $_POST['personFirstName'];
  $personLastName  = $_POST['personLastName'];

  echo "the name you entered was: ".$personFirstName."".$personLastName;
}

echo '<a href="get.php">Go Back</a>';

 ?>
