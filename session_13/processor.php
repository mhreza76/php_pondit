<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<br>";
if(array_key_exists('gender', $_POST)){
    echo "You select: " . $_POST['gender'] . "<br>";
}else{
    echo "Please select your gender <br>";
}

//best practice for check yes no
$toggle = "No";
if(array_key_exists('toggle', $_POST)){
    if($_POST['toggle'] == 1){
        $toggle = "Yes";
    }
}
echo $toggle ;
?>