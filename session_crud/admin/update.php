<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/session_crud/config.php');
session_start();

use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];
$guestsPosition = $_POST['guestsPosition'];
if(array_key_exists('guestbook_data', $_SESSION)){
    $strValidatedData = $_SESSION['guestbook_data'];
    $guests = unserialize($strValidatedData);
}

if(Utility :: isPosted()) {
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);

    if(!$validatedData){
        header('location:index.php');
    }else{
        $guests[$guestsPosition] = $validatedData;
        $_SESSION['guestbook_data'] = serialize($guests);

        if(array_key_exists('guestbook_data', $_SESSION)){
            header('location:index.php');
        }else{
            echo 'Data has not been saved successfully';
        }
    }
}



