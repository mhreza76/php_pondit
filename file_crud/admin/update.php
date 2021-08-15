<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/file_crud/config.php');

use App\GuestBook\GuestBook;
use App\Utility\Utility;
use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Debugger;

$guests = [];
$guestsPosition = $_POST['guestsPosition'];
if(file_exists($data_source)){
    $guests = unserialize(file_get_contents($data_source));
}else{
    echo "File not found";
}

if(Utility :: isPosted()) {
    $sanitizedData = Sanitizer::sanitize($_POST);
    $validatedData = Validator::validate($sanitizedData);

    if(!$validatedData){
        header('location:index.php');
    }else{
        $guests[$guestsPosition] = $validatedData;

        if(file_put_contents($data_source, serialize($guests))){
            header('location:index.php');
        }else{
            echo 'Data has not been saved successfully';
        }
    }
}



