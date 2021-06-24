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

//Associative Array
$items = [
    'item1' => 'Mobile',
    'item2' => 'Charger',
    'item3' => 'Cable'
];

echo '<ol>';
foreach ($items as $value){
    echo "<li>$value</li>";
}
echo '</ol>';

$name = [
    'first_name' => 'Mahmudul',
    'middle_name' => 'Hasan',
    'last_name' => 'Reza'
];
echo '<ul>';
foreach ($name as $value){
    echo "<li>$value</li>";
}
echo '</ul>';


//Multidimensional Array
$students = array(
    array(
        'name' => 'Reza',
        'id' => '1105060',
        'department' => 'CSE',
    ),
    array(
        'name' => 'Ome',
        'id' => '1105073',
        'department' => 'CSE',
    ),
    array(
        'name' => 'Daud',
        'id' => '1105076',
        'department' => 'EEE',
    )
);

foreach ($students as $student){
//    echo '<pre>';
//        print_r($student);
//    echo '</pre>';

    foreach ($student as $key => $value){
        echo "$key : $value";
        echo '</br>';
    }
    echo '</br>';
}
echo '</br>';