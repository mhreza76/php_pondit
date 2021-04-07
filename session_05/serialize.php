<pre>
<?php
echo "<h3>serialize:</h3>";
$arr2 = array("Reza", "1105060", "CSE", array("District" => "Naogaon", "Devision" => "Rajashahi", "job_status" => false));
$serialized_data = serialize($arr2);
echo "$serialized_data<br>";

echo "<h3>unserialize:</h3>";
//print_r(unserialize($serialized_data));
var_dump(unserialize($serialized_data));

?>

</pre>

