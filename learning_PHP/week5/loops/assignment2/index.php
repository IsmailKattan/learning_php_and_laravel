<?php 

$index = 0; 

while($index < 20)
{
    $index+=2;
    echo $index . "<br>";
}

$index = 0; 

for(;$index<20;)
{
    $index++;
    if($index%2 == 0)
    {
        echo $index . "<br>";
    }
}

$index = 0;

do
{
    $index += 2;
    echo $index . "<br>";
} while($index < 20);