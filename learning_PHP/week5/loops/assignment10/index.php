<?php 

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$size = count($nums);
foreach ($nums as $index => $num) {
  $otherIndex = ($size - 1) - $index;
  $otherNum = $nums[$otherIndex];
  echo "\"{$num} + {$otherNum} = " . ($num + $otherNum) . "\"<br>";
}


// Output
/*
"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"
*/