<?php 

// Write Function Content Here
//---------------1---------------
// function get_arguments()
// {
//     $all = "";
//     foreach (func_get_args() as $value) {
//         $all .= $value;   
//     }
//     return  $all;
// }
//---------------2---------------
function get_arguments(...$words)
{
    $all = "";
    foreach ($words as $value) {
        $all .= $value;
    }
    return $all;
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP