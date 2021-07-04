<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/guest_book/config.php');
use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guestsPosition = $_GET['guestsPosition'];
if (array_key_exists('guestbook_data', $_COOKIE)) {
    $strValidatedData = $_COOKIE['guestbook_data'];
    $guests = unserialize($strValidatedData);

}

unset($guests[$guestsPosition]);
//Debugger::debug($guests);
$converted_str = serialize($guests);
//Debugger::debug($converted_str);

$result = setcookie('guestbook_data', $converted_str, time() + (86400 * 30), "/"); // 86400 = 1 day
if($result){
    header('location:list.php');
}else{
    echo 'Data has not been saved in cookie.';
}