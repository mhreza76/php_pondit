<?php


//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//echo '<br>';
$full_name = null;
function has_alpha($strvalue)
{
//    $errors[] =
    if(!ctype_alpha($strvalue)){
        echo '<ul>';
            echo '<li>' . 'Use alphabet only' . '</li>';
        echo '</ul>';
        return true;
    }

}

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    if(array_key_exists('fullName', $_POST)){
        $full_name = $_POST['fullName'];
        $full_name_array = explode(' ',$full_name);

        $test = explode(',',$full_name);
        echo "<pre>";
            echo $test[0];
        echo "</pre>";
        if(!empty($strvalue)){
            if(preg_match("/^([a-zA-Z. ]+)$/",$full_name)){
                echo 'Valid name given.';
            }else{
                echo 'Invalid name given.';
            }


//        $count = 0;
//        foreach($full_name_array as $name){
//            if(has_alpha($name)){
//                $count++;
//                break;
//            }
//        }
//        if($count < 1){
//            echo "Submitted Successfully";
//        }


        }
        else{
            echo "name can't be empty";
        }

    }
}


?>