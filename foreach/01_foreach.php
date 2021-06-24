<?php


//Indexed Array
$salaries = [
  1000,
  2000,
  10000,
  5500,
  7000
];

foreach ($salaries as $salary){
    echo "Salary: $salary";
    echo '</br>';
}
echo '</br>';

foreach ($salaries as $index => $value){
    echo "$index : $value";
    echo '</br>';
}

