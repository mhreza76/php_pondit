<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/session_crud/config.php');
session_start();
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guestsPosition = $_GET['guestsPosition'];
if (array_key_exists('guestbook_data', $_SESSION)) {
    $strValidatedData = $_SESSION['guestbook_data'];
    $guests = unserialize($strValidatedData);

}

unset($guests[$guestsPosition]);
//Debugger::debug($guests);
$_SESSION['guestbook_data'] = serialize($guests);

if(array_key_exists('guestbook_data', $_SESSION)){
    header('location:index.php');
}else{
    echo 'Data has not been saved in cookie.';
}