<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_12/config.php');
session_start();

use App\GuestBook\GuestBook;
//use App\Utility\Utility;
use App\Utility\Debugger;

//if(Utility :: isPosted()){
//
//}
$storedData = null;
$user_position = $_GET['user_position'];


//$strValidateData = [];

if(array_key_exists('feedback_data', $_SESSION)){
    $strValidatedData = $_SESSION['feedback_data'];
    $users = unserialize($strValidatedData);
}

$user = $users[$user_position];
//Debugger::debug($guest);

//$guestbook = new GuestBook($storedData);
//Debugger::debug($guestbook);
//setcookie('name', 'reza', time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Guest Book</title>
</head>
<body>
<section>
    <div class="container">
        <h1 class=" mb-4 pt-5 offset-4 " style="color: #31D2F2"> Feedback</h1>
        <div class="row">
            <div class="col-sm-8 offset-3">
                <dl class="row">
                    <dt class="col-sm-3">First Name:</dt>
                    <dd class="col-sm-9"><?= $user['first_name'];?></dd>
                    <dt class="col-sm-3">Last Name:</dt>
                    <dd class="col-sm-9"><?= $user['last_name'];?></dd>
                    <dt class="col-sm-3">Email:</dt>
                    <dd class="col-sm-9"><?= $user['email'];?></dd>
                    <dt class="col-sm-3">Mobile Number:</dt>
                    <dd class="col-sm-9"><?= $user['mobile_number'];?></dd>
                    <dt class="col-sm-3">Message:</dt>
                    <dd class="col-sm-9"><?= $user['message'];?></dd>
                </dl>
                <a href="index.php?hello=hi">Go to index.</a>

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>