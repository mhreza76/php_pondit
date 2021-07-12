<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/json_crud/config.php');
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $user_json_data = file_get_contents($data_source);
    $users = json_decode($user_json_data,true);
    //echo "<pre>";
    //    print_r($users);
    //echo "</pre>";

    $users[] = array('name' => $name, 'email' => $email);

//    echo "<pre>";
//        print_r($users);
//    echo "</pre>";
    $users_json_data_after_insert = json_encode($users);
//    Debugger::debug($users_json_data_after_insert);

    file_put_contents($data_source, $users_json_data_after_insert);
    header('location: index.php');


}
