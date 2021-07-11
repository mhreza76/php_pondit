<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php_pondit/reza_exam_13/config.php');


$user_json_data = file_get_contents($data_source);
//echo $user_json_data;
$users = json_decode($user_json_data,true);

$storedData = null;
$strValidatedData = [];
if (array_key_exists('guestbook_data', $_COOKIE)) {
    $strValidatedData = $_COOKIE['guestbook_data'];
    $storedData = unserialize($strValidatedData);
//    Debugger::debug($storedData);
}

//$guestbook = new GuestBook($validatedData);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>json crud</title>
</head>
<body>
<sectiion>
    <div class="container">
        <h1 class="text-center mb-4 pt-5">CONTACT US</h1>
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($users) && count($users) > 0){
                        $i = 0;
                        foreach ($users as $key => $user) {
                            ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $user['first_name']; ?></td>
                                <td><?= $user['last_name']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td><?= $user['message']; ?></td>
                                <td><a href="show.php? user_position=<?= $key ?>" style="text-decoration: none;">Show</a> |
                                    <a href="edit.php? user_position=<?= $key ?>" style="text-decoration: none;">Edit</a> |
                                    <a href="delete.php?user_position=<?= $key ?>" style="text-decoration: none;">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="3">No data is Available.</td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>

                <div class="div">
                    <a href="create.php">Create New.</a>
                </div>
            </div>
        </div>
    </div>
</sectiion>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>
