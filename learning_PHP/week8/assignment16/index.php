<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$nmix = [];
$index = 0; 
array_multisort($mix);
foreach ($mix as $key => $value) {
    if(is_numeric($value)&&$value%2==1)
    {
        $nmix[$index]= $value;
        $index++;
    }
}

echo "<pre>";
print_r($nmix);
echo "</pre>";
/* Output
Array
(
  [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)
*/