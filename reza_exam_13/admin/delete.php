<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_13/config.php');



$user_json_data = file_get_contents($data_source);
$users = json_decode($user_json_data,true);

$user_position = $_GET['user_position'];




unset($users[$user_position]);

$users_json_data_after_insert = json_encode($users);
//    Debugger::debug($users_json_data_after_insert);

file_put_contents($data_source, $users_json_data_after_insert);
header('location: index.php');
