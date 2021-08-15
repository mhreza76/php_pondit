<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/file_crud/config.php');

use App\Utility\Debugger;

$guestsPosition = $_GET['guestsPosition'];

if(file_exists($data_source)){
    $guests = unserialize(file_get_contents($data_source));
}else{
    echo "File not found";
}

unset($guests[$guestsPosition]);
//Debugger::debug($guests);

if(file_put_contents($data_source, serialize($guests))){
    header('location:index.php');
}else{
    echo 'Data has not been deleted successfully';
}

