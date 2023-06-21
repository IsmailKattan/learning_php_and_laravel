<?php 

$chars = ["A", "B", "C"];
$chars[3] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = ["A", "B", "C"];
array_push($chars,"D");

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = ["A", "B", "C"];
$chars = array_merge($chars,["D"]);

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = ["A", "B", "C"];
$chars = $chars + ["D"];

echo "<pre>";
print_r($chars);
echo "</pre>";
/* Output
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
)
*/