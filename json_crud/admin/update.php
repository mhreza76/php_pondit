<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/json_crud/config.php');


use App\Utility\Debugger;

$user_json_data = file_get_contents($data_source);
$users = json_decode($user_json_data,true);



if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_position = $_POST['user_position'];

    $user_json_data = file_get_contents($data_source);
    $users = json_decode($user_json_data,true);
    //echo "<pre>";
    //    print_r($users);
    //echo "</pre>";

    $users[$user_position] = array('name' => $name, 'email' => $email);
//    $users[$user_position]['name'] = $name;
//    $users[$user_position]['email'] = $email;

//    echo "<pre>";
//        print_r($users);
//    echo "</pre>";
    $users_json_data_after_update = json_encode($users);
//    Debugger::debug($users_json_data_after_insert);

    file_put_contents($data_source, $users_json_data_after_update);
    header('location: index.php');


}



