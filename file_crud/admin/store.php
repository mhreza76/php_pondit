<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/file_crud/config.php');
session_start();
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];

if(file_exists($data_source)){
    $guests = unserialize(file_get_contents($data_source));
}else{
    echo "File not found";
}

if(Utility :: isPosted()){
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);


    if(!$validatedData){
        header('location:create.php');
    }else{

        $guests[] = $validatedData;

        if(file_put_contents($data_source, serialize($guests))){
            header('location:index.php');
        }else{
            echo 'Data has not been saved successfully';
        }
    }
}

Debugger::debug($guests);




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
