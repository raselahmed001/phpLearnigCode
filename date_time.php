<?php

//echo "Time and Date : " . date("d-m-Y-h-i-sA") . "<br><br>";
//
//echo date("d-m-Y-H-i-s-A-l", mktime(0,0,0,1,12,1998))."<br>";
//echo date("d-m-Y-H-i-s-A-l",gmmktime(0,0,0,1,12,1998))."<br>";

$date = date_create("2024-4-23 10:23:00",timezone_open("Asia/Dushanbe"));
echo date_format($date, "d/m/y H:i:sA");

 