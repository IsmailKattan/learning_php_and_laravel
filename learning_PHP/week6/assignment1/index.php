<?php

function greeting($name,$sex = "")
 {
    if($sex == "Male"){
        echo "Hello Mr $name <br>";
    }elseif($sex == "Female"){
        echo "Hello Miss $name <br>";
    }else{
        echo "Hello $name <br>";
    }
 }

// Write Function Content Here

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
