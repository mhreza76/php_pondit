<?php

/*
//            Magic constants
echo __DIR__ . "<br>";
echo __FILE__; . "<br>";
echo __LINE__ . "<br>";
*/

//require_once __DIR__ . '/vendor/autoload.php';


include_once($_SERVER['DOCUMENT_ROOT'] . "/php_pondit/session_04/config.php");

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();