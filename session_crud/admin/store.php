<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/session_crud/config.php');
session_start();
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];
if(array_key_exists('guestbook_data', $_SESSION)){
    $strValidatedData = $_SESSION['guestbook_data'];
    $guests = unserialize($strValidatedData);
}

if(Utility :: isPosted()){
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);
//    $guests= $validatedData;
//    $strValidatedData = serialize($guests);

    if(!$validatedData){
        header('location:index.php');
    }else{

        $guests[] = $validatedData;
        $_SESSION['guestbook_data'] = serialize($guests);
        if(array_key_exists('guestbook_data', $_SESSION)){
            header('location:index.php');
//            Debugger::debug($_SESSION);
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
    <a href="index.php">Go to Index Page.</a>
</div>
</body>
</html>
