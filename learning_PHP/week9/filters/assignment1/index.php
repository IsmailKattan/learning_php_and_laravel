<?php 

$values = filter_list();

$keys = [];
foreach ($values as $key => $value) {
    $keys[$key] = filter_id($value);
}

$array = array_combine($keys,$values);
echo "<pre>";
print_r($array);
echo "</pre>";