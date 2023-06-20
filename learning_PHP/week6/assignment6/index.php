<?php 

function calculate($num1,$num2,$operator = "a")
{
    switch ($operator) {
        case "a":
        case "add":
            return $num1 + $num2;
            break;        
        case "s":
        case "subtract":
            return $num1 - $num2;
            break;
        case "m":
        case  "multiply":
            return $num1 * $num2;
            break;

        default:
            return "the $operator not supported";
            break;
    }
}

echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200