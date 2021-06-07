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

//  child_date_of_birth
    if(array_key_exists('child_date_of_birth', $_POST)){
        $child_date_of_birth = $_POST['child_date_of_birth'];
    }
    $current_date = date('d-m-Y');



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

    if($current_date <= $child_date_of_birth){
        $errors[] = "Birthdate can't be greater equal to current date";
    }


    if(count($errors) > 0){
        $validator->display_validation_errors($errors);
    }else{
        echo '<strong>' . 'Child Full Name is: ' . $child_first_name . ' ' . $child_middle_name . ' ' . $child_last_name . ' ' . $child_suffix . '.' . '</strong>';
    }
    echo '<br>';

    if(array_key_exists('child_gender', $_POST)){
        if ($_POST['child_gender'] == ''){
            echo "You don't select any gender";
        }elseif($_POST['child_gender'] !== ''){
            echo 'Child gender is : ' . $_POST['child_gender'];
        }
    }
    echo '<br>';


    if($current_date > $child_date_of_birth){
        echo "Child's date of birth is: " . $child_date_of_birth . '.';
    }
    echo '<br>';

    $toggle = 'No';
    if(array_key_exists('toggle', $_POST)){
       if($_POST['toggle']){
           $toggle = 'Yes';
       }
    }
    echo 'Toggle: ' . $toggle;
}










