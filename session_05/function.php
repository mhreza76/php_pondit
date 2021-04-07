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


?>
</pre>
