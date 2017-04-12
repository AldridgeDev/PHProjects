<?php
include('testdb.php');

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

if ($dbSuccess) {

    $company_SQLupdate = "UPDATE Company
                          SET COUNTRY = 'United States'
                          WHERE COUNTRY = 'Australia'";

    if(mysql_query($company_SQLupdate)) {
      echo "UPDATE Company - Successful<br>";
    } else {
      echo "UPDATE Company - Failed<br>";
    }


}

 ?>
