<?php
include './functions.php';

$cars = ['mazda', 'toyota', 'honda'];

$year = date("Y");

echo time();

echo "<hr>";

$birthday = mktime(12, 30, 0, 4, 11, 2000);
echo $birthday;

echo "<hr>";

echo mktime(0,0,0,1,2,1970);

echo "<hr>";

echo 'Time has passed since the day of birth: ' . (time() - $birthday) / (60 * 60 * 24 * 365);

echo "<hr>";

echo strtotime("1st January 1999 Monday +2 weeks");

echo "<hr>";

echo date("d M Y");

$dt = getdate($birthday);
