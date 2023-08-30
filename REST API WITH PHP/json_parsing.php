<?php

$arr = ["Name"=>"Sumit Soni", "Roll_No"=>"22MCA063", "Course"=>"MCA"];

echo "<br><h2 style='text-transform:uppercase'>The raw data in array format</h2><b>";
var_dump($arr);
echo "<hr></b><br>";

$json_data = json_encode($arr);


echo "<h2 style='text-transform:uppercase'>The array is converted into json format</h2><b>";
var_dump($json_data);

echo "</b><hr><br>";

echo "<h2 style='text-transform:uppercase'>The json data string is converted into php array format</h2><b>";
var_dump(json_decode($json_data, true));
echo "</b>";

echo "</b><hr><br>";

echo "<h2 style='text-transform:uppercase'>The json data string is converted into php stdclass object format</h2><b>";
var_dump(json_decode($json_data));
$res = json_decode($json_data);
echo "<br><br>";
echo "Using the object's data member Name ". $res->Name . "<br>";
echo "Using the object's data member Roll No ". $res->Roll_No . "<br>";
echo "Using the object's data member Course ". $res->Course;
echo "</b>";

?>