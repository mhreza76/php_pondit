<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .b1{
            /*height:100px;*/
            /*width:100px;*/
            padding-top: 20px;
            border:2px solid black;
        }
        .b2{
            /*height:100px;*/
            /*width:100px;*/
            padding-top: 70px;
            border:2px solid black;
            padding-bottom: 40px;
        }
        .name{
            width:130px;
            margin-top:-50px;
            margin-left:5px;
            background:white;
        }
        .other{
            width:170px;
            margin-top:-50px;
            margin-left:5px;
            background:white;
        }
    </style>
</head>
<body>
<section>
    <h1 class="pb-5">BASIC HTML FORM</h1>
    <div class="container">
        <form action="process.php" method="post" enctype="multipart/form-data">
            <section>
                <div class="row b1">
                    <h1 class="name">Name</h1>
                    <div class=" col-md-6 m-auto">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 m-auto" >
                                <label for="firstname">First name <font color="red"> *</font></label>
                                <input type="text" class="form-control" id="firstname"
                                       name="firstname" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 m-auto">
                                <label for="lastname">Last name <font color="red">*</font></label>
                                <input type="text" class="form-control" id="lastname"
                                       name="lastname" required>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row b2 ">
                    <h1 class="other">Other Questions</h1>
                    <div class=" col-md-6 m-auto">
                        <p><strong>Choose a drink: </strong></p>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="drink" id="male" value="coffee" checked>
                            <label class="form-check-label" for="coffee">Coffee</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="drink" id="female" value="tea"">
                            <label class="form-check-label" for="tea"">Tea</label>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="radio" name="drink" id="hot_chocolate" value="hot_chocolate">
                            <label class="form-check-label" for="hot_chocolate">hot chocolate</label>
                        </div>


                        <p><strong>What ice cream do you like? </strong></p>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="ice_cream[]" id="chocolate" value="Chocolate">
                            <label class="form-check-label" for="chocolate">Chocolate</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="ice_cream[]" id="chocolate_pudding" value="Chocolate Pudding">
                            <label class="form-check-label" for="chocolate_pudding">Chocolate pudding</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="ice_cream[]" id="chocolate_peanut_butter" value="Chocolate Peanut Butter">
                            <label class="form-check-label" for="chocolate_peanut_butter">Chocolate Peanut Butter</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="ice_cream[]" id="vanilla" value="Vanilla">
                            <label class="form-check-label" for="vanilla">Vanilla</label>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="checkbox" name="ice_cream[]" id="strawberry" value="Strawberry">
                            <label class="form-check-label" for="strawberry">Strawberry</label>
                        </div>

                        <div class="col-md-2 pt-n5 mb-5">
                            <label for="sscGroup">Select a school</label>
                            <select class="form-select" aria-label="Default select example" id="school" name="school"
                                    required>
                                <option value="harvard">Harvard</option>
                                <option value="ndc">NDC</option>
                                <option value="mit">MIT</option>
                            </select>
                        </div>


                        <div class="col-md-2 pt-n5 mb-5">
                            <p>Please Provide Comments:</p>
<!--                            <label for="comments">Please Provide Comments:</label>-->
                            <textarea rows="4" cols="50" name="comment" form="usrform" required>Enter text here...</textarea>

                        </div>
                    </div>


                </div>
            </section>



            <div class="d-grid gap-2 col-1 mx-auto pb-5">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>