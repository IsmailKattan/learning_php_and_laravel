<?php
/*
//---------------1--------------- 
function ret_who_string($a, $b, $c) {
    if(gettype($a == "string"))
    {
        return $a;
    }elseif(gettype($b == "string"))
    {
        return $b;
    }elseif(gettype($c == "string"))
    {
        return $c;
    }
}
function ret_who_int($a, $b, $c) {
    if(gettype($a == "int"))
    {
        return $a;
    }elseif(gettype($b == "int"))
    {
        return $b;
    }elseif(gettype($c == "int"))
    {
        return $c;
    }
}
function ret_who_boolean($a, $b, $c) {
    if(gettype($a == "boolean"))
    {
        return availablty($a);
    }elseif(gettype($b == "boolean"))
    {
        return availablty($b);
    }elseif(gettype($c == "boolean"))
    {
        return availablty($c);
    }
}
function availablty($a)
{
    if($a)
    {
        return "Available";
    } 
    return "Not Available"; 
}
function check_status($a, $b, $c) {
    echo "Hello " . ret_who_string($a, $b, $c) . ", Your Age Is " . ret_who_string($a, $b, $c) . ", You Are " . ret_who_boolean($a, $b, $c) . " For Here <br>";
}
*/
function set_value(&$variable,...$values)
{
    foreach ($values as $value) {
        if(gettype($variable) === gettype($value))
        {
            $variable = $value;
        }
    }
    if(is_bool($variable))
    {
        if($variable === true)
        {
            $variable = "Available";
        }
        else{
            $variable = "Not Available";
        }
    }
}   

function check_status($a, $b, $c) {

    $values = [$a,$b,$c];
    $name = "";
    $age = 0;
    $availablty = true;
    set_value($name, ...$values);
    set_value($age, ...$values);
    set_value($availablty, ...$values);
    echo "Hello " . $name . ", Your Age Is " . $age . ", You Are " . $availablty . " For Here <br>";
}
// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

