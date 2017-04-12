<?php

echo "datestrings are converted to dates with the php
<span style=\" text-decoration: underline;\"><strong>strtotime()</strong></span>
function<Br><br>";

$datetimeString="2010-06-01 15:30";
echo "".$datetimeString."is represented by ".strtotime($datetimeString)."<br>";

$datetimeString="2010-06-01 15:30 + 2 weeks";
echo "".$datetimeString." is represented by ".strtotime($datetimeString)."<Br>";

$datetimeString="now + 4 weeks";
echo "".$datetimeString." is represented by ".strtotime($datetimeString)."<Br>";

echo "<br><hr><br>";

$MYSQLdate = date("Y-m-d H:i:s", strtotime("now"));
$humanDate = date("g:i A D j M Y", strtotime("now"));

echo "".$MYSQLdate." is how NOW is stored in MySQL<br>?";
echo "".$humanDate." is a more human-friendly way of expressing is.<Br>";

 ?>
