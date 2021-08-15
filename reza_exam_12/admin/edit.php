<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_12/config.php');
session_start();

//use App\Utility\Utility;
use App\Utility\Debugger;

//if(Utility :: isPosted()){
//
//}
$storedData = null;
$user_position = $_GET['user_position'];


//$strValidateData = [];

if (array_key_exists('feedback_data', $_SESSION)) {
    $strValidatedData = $_SESSION['feedback_data'];
    $users = unserialize($strValidatedData);
}

$user = $users[$user_position];
//Debugger::debug($guest);
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>cookie crud</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3 pb-5">
                <h1 class=" mb-4 pt-5 text-center" style="color: #31D2F2"> Feedback</h1>

                <form method="POST" action="update.php">
                    <!--                    <div class="row">-->
                    <div class="mb-3 col-sm-12">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                               aria-describedby="emailHelp" value="<?= $user['first_name']; ?>">

                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?= $user['last_name']; ?>">
                    </div>
                    <!--                    </div>-->

                    <div class="mb-3 col-sm-12">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email" value="<?= $user['email']; ?>">
                    </div>
                    <div class="mb-3 col-sm-12">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number" value="<?= $user['mobile_number']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-12">
                            <textarea type="text" name="message" class="form-control" id="message" rows="4" placeholder="Message"><?= $user['message']; ?></textarea>
                        </div>
                    </div>
                    <input
                            type="hidden"
                            name="guestsPosition"
                            value="<?= $user_position; ?>">
                    <button type="submit" class="btn btn-info col-12 text-white">Update</button>
                </form>

            </div>
        </div>

    </div>
</section>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>
