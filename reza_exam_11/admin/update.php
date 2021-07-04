<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_11/config.php');


use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];
$guestsPosition = $_POST['guestsPosition'];
if(array_key_exists('guestbook_data', $_COOKIE)){
    $strValidatedData = $_COOKIE['guestbook_data'];
    $guests = unserialize($strValidatedData);
}

if(Utility :: isPosted()) {
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);

    if(!$validatedData){
        header('location:list.php');
    }else{
        $guests[$guestsPosition] = $validatedData;
        $result = setcookie('guestbook_data', serialize($guests), time() + (86400 * 30), "/"); // 86400 = 1 day

        if($result){
            header('location:list.php');
        }else{
            echo 'Data has not been saved successfully';
        }
    }
}



