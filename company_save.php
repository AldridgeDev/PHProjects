<?php
include ('testdb.php');
include ('dbSuccess.php');

if($dbSuccess) {
  $preName     = $_POST['preName'];
  $companyName = $_POST['companyName'];
  $RegType     = $_POST['RegType'];
  $StreetA     = $_POST['StreetA'];
  $StreetB     = $_POST['StreetB'];
  $StreetC     = $_POST['StreetC'];
  $Town        = $_POST['Town'];
  $County      = $_POST['County'];
  $Postcode    = $_POST['Postcode'];
  $COUNTRY     = $_POST['COUNTRY'];

$Company_SQLinsert = "INSERT INTO Company
( preName
, Name
, RegType
, StreetA
, StreetB
, StreetC
, Town
, County
, Postcode
, COUNTRY )
VALUES
( '$preName'
, '$companyName'
, '$RegType'
, '$StreetA'
, '$StreetB'
, '$StreetC'
, '$Town'
, '$County'
, '$Postcode'
, '$COUNTRY' )";

if(empty($companyName)){
  echo '<span style="color:red;">Cannot add company with no name.</span><br><br>';
} else {
  echo '<span style="text-decoration: underline;"
        SQL statement:</span>
        <br>'.$Company_SQLinsert.'<br><br>';

  if(mysql_query($Company_SQLinsert)){
    echo 'used to Successfully add new company.<br><br>';
  } else {
    echo '<span style="color:red;"> FAILED to add a new company.</span><br><br>';
  }
}

}


?>
