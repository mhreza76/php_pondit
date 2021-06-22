<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/guest_book/config.php');


use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];
if(array_key_exists('guestbook_data', $_COOKIE)){
    $strValidatedData = $_COOKIE['guestbook_data'];
    $guests = unserialize($strValidatedData);
}

if(Utility :: isPosted()){
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);
    $guests[]= $validatedData;
    $strValidatedData = serialize($guests);

    if(!$strValidatedData){
        header('location:create.php');
    }else{
        Debugger::debug($strValidatedData);
        $result = setcookie('guestbook_data', $strValidatedData, time() + (86400 * 30), "/"); // 86400 = 1 day

        if($result){
            echo 'Data has been saved successfully. ';
        }else{
            echo 'Data has not been saved successfully';
        }
    }
    //Debugger::debug($strValidatedData);
}

//$strValidatedData = serialize($validatedData);
//$guestbook = new GuestBook($validatedData);




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <a href="list.php">Go to List.</a>
</div>
</body>
</html>
