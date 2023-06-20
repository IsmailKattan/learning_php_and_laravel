<?php

$greet = function($name)
{
    return "Greetings";
};

$greet = fn($name) => "Greetings";
// Needed Output
echo $greet("Osama"); // Greetings