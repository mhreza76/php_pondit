<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_12/config.php');
session_start();

use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$users = [];
$guestsPosition = $_POST['user_position'];
if(array_key_exists('feedback_data', $_SESSION)){
    $strValidatedData = $_SESSION['feedback_data'];
    $users = unserialize($strValidatedData);
}

if(Utility :: isPosted()) {
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);

    if(!$validatedData){
        header('location:index.php');
    }else{
        $guests[$guestsPosition] = $validatedData;
        $_SESSION['feedback_data'] = serialize($guests);

        if(array_key_exists('feedback_data', $_SESSION)){
            header('location:index.php');
        }else{
            echo 'Data has not been saved successfully';
        }
    }
}



