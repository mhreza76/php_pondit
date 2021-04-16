<pre>

<?php

function test($func_name){
    echo "<h1>$func_name function called</h1>";
}

test("test");

$arr = array("Reza", "1105060", "CSE");
echo is_array($arr) . "<br>";
var_dump($arr);
echo "<br>";
$a = null;
$b = "";
if(empty($a)){
    echo "a is empty <br>";
}
if(empty($b)){
    echo "b is empty <br>";
}

if(isset($a)){
    echo "a is set <br>";
}
if(isset($b)){
    echo "b is set <br>";
}


echo "<h3>array_key_exists:</h3>";
$arr2 = array("Name" => "Reza", "ID" => "1105060", "Dept" => "CSE");
print_r($arr2);
//var_dump($arr2);
echo "<br />";
if(array_key_exists("ID", $arr2)){
    echo "$arr2[ID] <br>";
}else{
    echo "Key not found <br>";
}

echo "<h3>strpos function:</h3>";
$str1 = "Reza from Naogaon";
echo $str1 . "<br>strpos for from: ";
echo strpos($str1, "from");

echo "<h3>substr function:</h3>";
$str1 = "Pondit Exam 04 running reza";
echo $str1 . "<br>substr for 7: ";
echo substr($str1,7) . "<br>";

echo substr($str1, 2, -3);



echo "<h3>strlen function:</h3>";
$full_name = "Mahmudul Hasan Reza";
echo $full_name . "<br> strlen: " .strlen($full_name);


echo "<h3>strtolower & strtoupperfunction:</h3>";
$full_name = "Mahmudul Hasan Reza";
echo $full_name . "<br> strtolower: " . strtolower($full_name) . "<br>" ;
echo $full_name . "<br> strtoupper: " . strtoupper($full_name) . "<br><br><br>";


echo "<h3>explode function:</h3>";
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6 piece7";
echo $pizza . "<br> explode: " ;
print_r (explode(" ",$pizza));
list($p1, $p2, $p3, $p4, $p5, $p6) = explode(" ", $pizza);


echo "<h3>implode function:</h3>";
$arr = array('Reza','from','CSE','5th','Batch');
print_r($arr);
echo 'for use implode " "<br>';
echo implode(" ",$arr);
echo "<br>";
echo nl2br("use nl2br function
 for line break \n lorem ipsum dolor sit amet,\n consectetur adip \n") ;

print "Hello world with print function";
?>
</pre>
