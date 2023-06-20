<?php 

// Write Function Content Here
function sum_all(...$nums)
{
    $sum = 0;

    foreach ($nums as $value) {
        if($value == 5) {
            continue;
        }
        elseif($value == 10) {
            $sum += $value*2;
        }else {
            $sum +=  $value;
        }
    }
    return $sum;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40