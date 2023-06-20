<?php 

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($num = $nums[$help_num];$num < $help_num;$num++)
{
    echo "\"$names[$num]\"" . "<br>";
}
/* 
Output
"Sayed"
"Osama" 
*/