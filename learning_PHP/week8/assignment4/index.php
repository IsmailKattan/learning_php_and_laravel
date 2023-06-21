<?php 

$nums = [10, 20, 30];

echo array_sum($nums) . "<br>";

function sum($num1,$num2)
{
    return $num1+$num2;
}

echo array_reduce($nums,"sum") . "<br>";

echo array_reduce($nums,fn($num1,$num2)=>$num1+$num2) . "<br>";


// Output
/*
60
60
*/
