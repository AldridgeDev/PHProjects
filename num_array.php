<!-- an example of numberic arrays in php -->
<!-- you dont have to manally assign each array a value type in php, as shown -->
<?php
$company=array(
   "Peanut Butter"
  , "Jelly"
  , "Raspberry"
  , "Cake"
  , "Pie"
);

$regtype=array(
   ""
  , "Partners"
  , "Limited"
  , "PLC"
  , ""
);

echo "<u>List of Stuff</u><Br>";
echo $company[0]." ".$regtype[0]."<br>";
echo $company[1]." ".$regtype[1]."<br>";
echo $company[2]." ".$regtype[2]."<br>";
echo $company[3]." ".$regtype[3]."<br>";
echo $company[4]." ".$regtype[4]."<br>";

 ?>
