<?php 

$nums = [5, 10, 20, 5, 30, 40];

function sum($num1,$num2)
{
    if($num2 !== 5)
        return $num1+$num2;
}

echo array_reduce($nums,"sum");
// Output
// 100
