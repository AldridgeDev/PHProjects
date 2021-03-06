<?php

include_once('testdb.php');

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
  // SQL script to create table Company

$createCoyTable_SQL = "CREATE OR REPLACE TABLE Company
( ID             INT(11)      NOT NULL AUTO_INCREMENT PRIMARY KEY
, preName        VARCHAR(50)  NULL
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
  echo "Create TABLE Company - Successful<br>";
}

$createPersonTable_SQL = "CREATE OR REPLACE TABLE Person
( ID             INT(11)     NOT NULL AUTO_INCREMENT PRIMARY KEY
, Salutation     VARCHAR(20)
, FirstName      VARCHAR(50)
, LastName       VARCHAR(50) NOT NULL
, CompanyID      INT(11)     NOT NULL)";


if (mysql_query($createPersonTable_SQL)) {
  echo "Create TABLE Person - Successful";
}

}




 ?>
