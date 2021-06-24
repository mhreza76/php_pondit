<?php
//Question 01
$arr1=[1,2,3,4,5];
$arr2=[6,7,8,9,10];
$twodim=[$arr1,$arr2];
//    echo '<pre>';
//        print_r($twodim);
//    echo '</pre>';
//    echo '</br>';

foreach($twodim as $array){
    foreach($array as $value){
        echo "$value ";
    }
    echo '<br/>';
}
echo '<br/>';


//Question 02
$arr=array(
    array(10,100,101),
    array(120,130,140),
    array(150,90,80)
);


$total_sum = 0;
foreach($arr as $array){
    $sum = 0;
    foreach($array as $value){
        $sum += $value;
        echo "$value</br>";
    }
    echo $sum;
    $total_sum += $sum;
    echo '<br/> </br>';
}
echo $total_sum;
echo '<br/>';