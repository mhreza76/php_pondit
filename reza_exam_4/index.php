<pre>

<?php
echo "<h3>strpos function:</h3>";
$str1 = "Reza from Naogaon";
echo $str1 . "<br>strpos for from: ";
echo strpos($str1, "from");

echo "<h3>substr function:</h3>";
$str1 = "Pondit Exam 04 running reza";
echo $str1 . "<br>substr for 7: ";
echo substr($str1,7);

echo "<h3>implode function:</h3>";
$arr = array('Reza','from','CSE','5th','Batch');
print_r($arr);
echo 'for use implode " "<br>';
echo implode(" ",$arr);

echo "<h3>strlen function:</h3>";
$full_name = "Mahmudul Hasan Reza";
echo $full_name . "<br> strlen: " .strlen($full_name);


echo "<h3>strtolower & strtoupperfunction:</h3>";
$full_name = "Mahmudul Hasan Reza";
echo $full_name . "<br> strtolower: " . strtolower($full_name) . "<br>" ;
echo $full_name . "<br> strtoupper: " . strtoupper($full_name) . "<br><br><br>";


echo "<h3>explode function:</h3>";
$full_name = "Mahmudul Hasan Reza";
echo $full_name . "<br> explode: " ;
print_r (explode(" ",$full_name));
echo "<br>";
echo nl2br("use nl2br function
 for line break \n lorem ipsum dolor sit amet,\n consectetur adip \n") ;

print "Hello world with print function";

?>
</pre>
