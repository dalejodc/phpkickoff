<?php

// Get the weekday name of a particular date
echo "Get the weekday name of a particular date" . "<br>";
echo date('l', mktime(0, 0, 0, 1, 4, 2014)) . "<br>";


// 30 days after to the current day
echo "Future day" . "<br>";
$futureDate = mktime(0, 0, 0, date("m"), date("d")+30, date("Y"));
echo date("d/m/Y", $futureDate) . "<br>";
?>