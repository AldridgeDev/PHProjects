<?php

include('testdb.php');
include('dbSuccess.php');

if($dbSuccess) {

  $Person_SQLselect = "SELECT p.ID, p.Salutation, p.FirstName, p.LastName,
                              p.CompanyID, c.ID, c.preName, c.Name
                       FROM person AS p
                       LEFT OUTER JOIN company AS c
                       ON p.CompanyID = c.ID";


  $Person_SQLselect_QUERY = mysql_query($Person_SQLselect);

  ?>
  <html>
  <body>
    <table border=1>
      <tr>
        <td>#</td>
        <td>Salutation</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Company</td>
      </tr>

  <?php

  $indx = 1;
  while($row = mysql_fetch_array($Person_SQLselect_QUERY, MYSQL_ASSOC)){
    $Salutation     = $row['Salutation'];
    $FirstName      = $row['FirstName'];
    $LastName       = $row['LastName'];
    $CompanypreName = $row['preName'];
    $CompanyName    = $row['Name'];

    // $CompanyFullName = trim($CompanypreName."".$CompanyName);

    ?>

    <tr>
      <td><?php echo $indx ?></td>
      <td><?php echo $Salutation ?></td>
      <td><?php echo $FirstName ?></td>
      <td><?php echo $LastName ?></td>
      <td><?php echo $CompanyName ?></td>
    </tr>

    <?php
    $indx++;
  }
  ?>
</table>
</body>
</html>
<?php

mysql_free_result($Person_SQLselect_QUERY);
}

 ?>
