<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/php_pondit/session_04/config.php");

$title = "Email Template";
$discount = "30%";
$client_name = "Neiman Marcus";

$template_full = <<<TEMP
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>$title</title>
    <style>



        p{
            margin: 0;
        }

        #wrapper{
            width: 550px;
            margin: 1rem auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        /*Style for header*/
        #wrapper header{
            border-bottom: 1px solid #808080;
        }
        #wrapper header .free-shipping{
            color: #bc0555;
            border-bottom: 1px solid #dcdcdc;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
        }
        #wrapper header .navbar-brand{
            width: 30%;
            margin: auto;
        }
        #wrapper header .discount .styles{
            font-size: 1.3rem;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            font-weight: 600;
            color: #ae7564;
        }
        #wrapper header .discount .discount-forty{
            font-size: 1.6rem;
            letter-spacing: 0.1rem;
            color: #000;
        }
        #wrapper header .discount .shop-sale{
            font-size: 1rem;
        }
        #wrapper header .discount .shop-sale a{
            color: #6b6b6b;
            border-bottom: 1px solid #6b6b6b;
            text-decoration: none;
        }

        /*Style for main*/
        #wrapper main{
            background-color: #c7dcef;
            padding: 20px;
        }

        #wrapper main .about{
            background-color: #3E3E3E;
            color: #fff;
            width: 9.1rem;
            padding-top: 10px;
            padding-bottom: 5px;
            margin: auto;
        }

        #wrapper main .about .neiman-marcus{
            font-size: 0.85rem;
            letter-spacing: 0.07rem;
            line-height: 0.4rem;
        }
        #wrapper main .about .exclusive{
            font-size: 0.75rem;
            letter-spacing: 0.4rem;
            font-weight: bold;
            line-height: 1.2rem;
        }

        #wrapper main h1{
            font-size: 3.4rem;
        }
        #wrapper main .btn{
            border-radius: 0;
            padding: 0.4rem 1rem;

        }
    </style>
</head>
<body>
<div id="wrapper">
   <header class="pb-4 mb-3">
        <p class="text-center pb-3 fw-bold free-shipping mb-3">Free shipping + Free Return</p>
        <div class="navbar-brand">
            <img src="img/logo.svg" alt="Logo Icon" class="img-fluid">
        </div>
        <div class="text-center discount mt-4">
            <p class="styles">2000 + Styles Just Added</p>
            <p class="discount-forty text-uppercase fw-bold">Up To $discount Off</p>
            <p class="shop-sale text-uppercase"><a href="#">Shop Sale</a> &nbsp;&gt;</p>
        </div>
    </header>
   <main class="text-center">
        <div class="about mb-4">
            <p class="neiman-marcus text-uppercase">$client_name</p>
            <p class="exclusive text-uppercase">Exclusive</p>
        </div>
        <h1 class="mb-2">Theory</h1>
        <p class="lh-lg">Relaxed styles capture the effortless spirit of the</p>
        <p>Mediterranean, including exclusives only found here</p>
        <p class="mt-3"><button type="button" class="btn btn-dark text-uppercase">Shop Now</button></p>
    </main>
   
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>
TEMP;


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($template_full);
$mpdf->Output();
?>









