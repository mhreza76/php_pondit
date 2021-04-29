<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .bgcolor1 {
            background-color: #F9F6E3;
        }
        .title{
            padding-left: 10px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Full Name Validate</title>
</head>
<body>
<section>
    <div class="container-fluid">
        <form action="processor.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class=" col-md-6 m-auto">
                    <div class="form-group row">
                        <div class="col-md-6 mb-3 m-auto" >
                            <h1 class=" mb-3 pt-5 m-auto">Form Validation</h1>
                            <label for="fullName">Full name <font color="red"> *</font></label>
                            <input type="text" class="form-control" id="fullName"
                                   name="fullName" required>
                        </div>
                    </div>

                </div>
            </div>


            <div class="d-grid gap-2 col-1 mx-auto pb-5">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>
