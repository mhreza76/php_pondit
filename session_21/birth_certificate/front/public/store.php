<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/php_pondit/session_21/birth_certificate/config.php');

use App\Person;
use App\Validator;

$child = new Person($_POST);
$validator = new Validator($_POST);
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

//die();
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
//    firstname
    if(array_key_exists('child_first_name', $_POST)){
        $child_first_name = $_POST['child_first_name'];
    }

//    middlename
    if(array_key_exists('child_middle_name', $_POST)){
        $child_middle_name = $_POST['child_middle_name'];
    }
//    lastname
    if(array_key_exists('child_last_name', $_POST)){
        $child_last_name = $_POST['child_last_name'];
    }
//    suffix
    if(array_key_exists('child_suffix', $_POST)){
        $child_suffix = $_POST['child_suffix'];
    }




    $errors = [];
    if(!$validator->is_empty($child_first_name)){
        $errors[] = 'Child First Name should not be empty';
    }
    if(!$validator->has_alpha($child_first_name)){
        $errors[] = 'Use alphabet in Child First Name';
    }

    if(!$validator->is_empty($child_middle_name)){
        $errors[] = 'Child Middle Name should not be empty';
    }
    if(!$validator->has_alpha($child_middle_name)){
        $errors[] = 'Use alphabet in Child Middle Name';
    }

    if(!$validator->is_empty($child_last_name)){
        $errors[] = 'Child Last Name should not be empty';
    }
    if(!$validator->has_alpha($child_last_name)){
        $errors[] = 'Use alphabet in Child Last Name';
    }

    if(!$validator->is_empty($child_suffix)){
        $errors[] = 'Child Suffix should not be empty';
    }
    if(!$validator->has_alpha($child_suffix)){
        $errors[] = 'Use alphabet in Child Suffix Name';
    }


    if(count($errors) > 0){
        $validator->display_validation_errors($errors);
        return;
    }else{
        echo '<strong>' . 'Child Full Name is: ' . $child_first_name . ' ' . $child_middle_name . ' ' . $child_last_name . ' ' . $child_suffix . '.' . '</strong>';
    }
}










