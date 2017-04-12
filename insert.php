<?php


$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "phpclass";
$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected);
if ($dbConnected) {
  echo "You have sucessfully connected to the $databaseName database<br>";
  if ($dbSelected) {
    echo "Database Connection successful<br>";
  } else {
    echo "Database connection failure<br>";
  }
} else {
  echo "MySQL connection FAILED<br>";
}

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

  $company_SQLinsert = "INSERT INTO Company
  ( preName
  , Name
  , RegType
  , StreetA
  , StreetB
  , StreetC
  , Town
  , County
  , PostCode
  , COUNTRY )
  VALUES
  ( 'The'
  , 'Pie Company'
  , ''
  , '89 Gravy Road'
  , ''
  , ''
  , 'Pastryville'
  , 'NSW'
  , '1297'
  , 'Australia')";

   if (mysql_query($company_SQLinsert)) {
     echo "INSERT INTO Company - Successful<br>";
   } else {
   echo "INSERT INTO Company - Failed<br>";
  }


  $person_SQLinsert = "INSERT INTO Person
  ( Salutation
  , FirstName
  , LastName
  , CompanyID )
  VALUES
  ( 'please work'
  , 'Antonio'
  , 'Aldridge'
  , 7)";

  if(mysql_query($person_SQLinsert)) {
    echo "INSERT INTO Person - Successful<br>";
  } else {
    echo "INSERT INTO Person - Failed<br>";
  }

}
?>
