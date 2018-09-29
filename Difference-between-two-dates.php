<?php

date1=date_create("2013-03-15");
$date2=date_create("2013-04-05");
$diff=date_diff($date1,$date2);
echo $diff->format("%d days");
$diff->format("%a days");

?>