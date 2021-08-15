<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/session_crud/config.php');
session_start();
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$user_position = $_GET['user_position'];
if (array_key_exists('feedback_data', $_SESSION)) {
    $strValidatedData = $_SESSION['feedback_data'];
    $users = unserialize($strValidatedData);

}

unset($users[$user_position]);
//Debugger::debug($guests);
$_SESSION['feedback_data'] = serialize($users);

if(array_key_exists('feedback_data', $_SESSION)){
    header('location:index.php');
}else{
    echo 'Data has not been saved in SESSION.';
}