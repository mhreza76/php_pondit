<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_13/config.php');



$user_json_data = file_get_contents($data_source);
$users = json_decode($user_json_data,true);



if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $user_position = $_POST['user_position'];

    $user_json_data = file_get_contents($data_source);
    $users = json_decode($user_json_data,true);

    $users[$user_position] = array('first_name' => $first_name, 'last_name' => $last_name,'email' => $email, 'message' => $message);

    $users_json_data_after_update = json_encode($users);


    file_put_contents($data_source, $users_json_data_after_update);
    header('location: index.php');


}

