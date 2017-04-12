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
  // SQL script to create table tCompany

$createCoyTable_SQL = "CREATE OR REPLACE TABLE tCompany
( ID             INT(11)      NOT NULL AUTO_INCREMENT PRIMARY KEY
, preName        VARCHAR(50)
, Name           VARCHAR(250) NOT NULL
, RegType        VARCHAR(50)  NULL
, StreetA        VARCHAR(150) NULL
, StreetB        VARCHAR(150) NULL
, StreetC        VARCHAR(150) NULL
, Town           VARCHAR(150) NULL
, County         VARCHAR(150) NULL
, PostCode       VARCHAR(50)  NULL
, COUNTRY        VARCHAR(250) NOT NULL)";

if (mysql_query($createCoyTable_SQL)) {
  echo "Create TABLE tCompany - Successful<br>";
}

$createPersonTable_SQL = "CREATE OR REPLACE TABLE tPerson
( ID             INT(11)       NOT NULL AUTO_INCREMENT PRIMARY KEY
, Salutation     VARCHAR(20)
, FirstName      VARCHAR(50)
, LastName       VARCHAR(50) NOT NULL
, CompanyID      INT(11)     NOT NULL)";


if (mysql_query($createPersonTable_SQL)) {
  echo "Create TABLE tPerson - Successful";
}

}




 ?>
