<?php

$dbConnection = array (
        'hostname' => 'localhost'
      , 'username' => 'root'
      , 'password' => ""
      , 'database' => 'phpclass'
  );

  echo "The hostname for our dbConnection is:".$dbConnection['hostname'];
  echo "<br><br>";

  echo "The database we connect to:".$dbConnection['database'];
  echo "<br><br>";

  // $dbConnected = @mysql_connect(
  //             $dbConnection['hostname']
  //           , $dbConnection['username']
  //           , $dbConnection['password']
  //   );
  //
  // $dbSelected = @mysql_select_db(
  //               $dbConnection['database']
  //             , $dbConnected
  //   );

 ?>
