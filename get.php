<?php
include('testdb.php');
include('dbSuccess.php');

if($dbSuccess) {
  ?>
  <form action="output.php" method="post">
    Enter First Name:
    <input type="text" name="personFirstName"/>

    Enter Last Name:
    <input type="text" name="personLastName"/>
    <br><br>

    <input type="submit" />
  </form>


  <?php

}

 ?>
