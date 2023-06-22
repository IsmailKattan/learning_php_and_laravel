<?php 

$nums = [1, 2, 3, 4, 5, 6];

function arrayShuffleManual($array) {
    $count = count($array);
    for ($i = $count - 1; $i >= 1; $i--) {
        $j = rand(0, $i);
        if ($i != $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    return $array;
}

echo "<pre>";
print_r(arrayShuffleManual($nums));
echo "</pre>";
// Output
// Every Time The Array Elements Will Be Shuffled

/*
Example 1
Array
(
  [0] => 5
  [1] => 1
  [2] => 6
  [3] => 2
  [4] => 4
  [5] => 3
)

// Example 2
Array
(
  [0] => 4
  [1] => 3
  [2] => 6
  [3] => 1
  [4] => 5
  [5] => 2
)
*/