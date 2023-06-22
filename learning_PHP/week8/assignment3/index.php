<?php 


$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
    
echo "<pre>";
print_r(array_flip($friends));
echo "</pre>";

  // Output
  /*
  Array
  (
    [as] => Ahmed Samy
    [mg] => Mahmoud Gamal
    [om] => Osama Mohamed
    [ag] => Ahmed Gamal
  )
  */ 