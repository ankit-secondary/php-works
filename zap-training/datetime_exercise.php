<html><body>&copy; 01/01/2020-8:45am-<?php

// copyright info with current date

echo date("d/m/y h:i:sa");
echo "<br>";


//Date conversion from previous date

$date=date_create(" 2020-06-19 13:44:02");
echo date_format($date,"d/m/y h:i:s a")."<br>";

// Convert current date into timestamp

echo time();
echo "<br>";

//Convert current timestamp into date (Y-m-d)

echo date("y-m-d",time());
echo "<br>";

//Addiing 1 month to the current time

$time=date_create();
 date_add($time,date_interval_create_from_date_string("1 month"));
echo date_format($time,"d-m-y h:i:s  a");
echo "<br>";

// Adding 2 days to current time

$Date=date_create();
date_add($Date,date_interval_create_from_date_string("2 days"));
echo date_format($Date,"d-m-y h:i:s a");
echo "<br>";

//Difference between 2 dates

$date1=date_create(" 2020-06-19 13:44:02 ");
$date2=date_create("2020-10-13 23:04:22");
$diff=date_diff($date1,$date2,true);
echo $diff->format(" %R%a days");

// using strtotime function

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

//  Displaying UTC Date

date_default_timezone_set("UTC");
echo date("d-m-y h:i:s a");
?>
</body> 
</html