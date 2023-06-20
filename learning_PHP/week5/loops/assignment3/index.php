<?php 

$num = 2;
$newNum = 1;

while ($num < 520) {
  echo $newNum . "<br>";
  $newNum = ($newNum * 2) + 2;
  $num = $newNum;
}

// Needed Output
/*
2 
1 
4 
10 
22
46
94 
190
382

*/