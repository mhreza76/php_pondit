<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/file_crud/config.php');
use App\Utility\Debugger;

$guests = [];
$guestsPosition = $_GET['guestsPosition'];

if(file_exists($data_source)){
    $guests = unserialize(file_get_contents($data_source));
}else{
    echo "File not found";
}

$guest = $guests[$guestsPosition];
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

    <title>File crud</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <h1 class=" mb-4 pt-5">Users</h1>
                <div class="form-text mb-4">We'd love to hear from you, please drop us a line if you've any query.</div>
                <form method="POST" action="update.php">
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                   aria-describedby="emailHelp" value="<?= $guest['firstName']; ?>">

                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $guest['lastName']; ?>">
                        </div>
                    </div>

                    <div class="mb-3 col-sm-12">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $guest['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-12">
                            <textarea type="text" name="message" class="form-control" id="message" rows="4" "><?= $guest['message']; ?></textarea>
                        </div>
                    </div>
                    <input
                            type="hidden"
                            name="guestsPosition"
                            value="<?= $guestsPosition; ?>">
                    <button type="submit" class="btn btn-info col-3 text-white">Update</button>
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