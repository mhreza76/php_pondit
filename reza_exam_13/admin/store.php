<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_13/config.php');


if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $user_json_data = file_get_contents($data_source);
    $users = json_decode($user_json_data,true);
//    echo "<pre>";
//        print_r($users);
//    echo "</pre>";

    $users[] = array('first_name' => $first_name, 'last_name' => $last_name,'email' => $email, 'message' => $message);

//    echo "<pre>";
//        print_r($users);
//    echo "</pre>";
    $users_json_data_after_insert = json_encode($users);
//    Debugger::debug($users_json_data_after_insert);

    file_put_contents($data_source, $users_json_data_after_insert);
    header('location: index.php');


}
