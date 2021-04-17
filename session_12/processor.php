<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo "<br>";
if(isset($_FILES['file'])){
    echo "<p>File Name: " . $_FILES['file']['name'] . "</p>";
    echo "<p>File Type: " .  $_FILES['file']['type'] . "</p>";
    echo "<p>File Temporary Location: " .  $_FILES['file']['tmp_name'] . "</p>";
    echo "<p>File Size: " .  number_format($_FILES['file']['size']/1024/1024, 4, '.', '' ), " MB" ."</p>";
}

$target = $_FILES['file']['tmp_name'];
$destination = "./uploaded_file/" . $_FILES['file']['name'];
$is_file_moved = move_uploaded_file($target, $destination);
if($is_file_moved){
    echo "file moved successfully";
}else{
    echo "file not moved";
    echo "<br> $target<br> $destination";
}