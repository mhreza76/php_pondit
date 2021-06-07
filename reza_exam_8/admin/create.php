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

    <title>Certificate Of Live Birth</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="../public/css/datepicker.css">
    <script src="../public/js/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function(){
            $('#child_time_of_birth').timepicker({
                timeFormat: 'h:mm p',
                interval: 1,
                minTime: '12:00am',
                maxTime: '11:59pm',
                defaultTime: '11',
                startTime: '10:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
            $(function (){
                $('.datepicker').datepicker({
                    startDate: '-3d'
                });
            });
        });
    </script>
</head>
<body>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12>">
                <h1 class=" mb-3 pt-5">U.S. Standard Certificate Of Live Birth</h1>

                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="adminstrative-tab" data-bs-toggle="tab"
                                data-bs-target="#adminstrative"
                                type="button" role="tab" aria-controls="adminstrative" aria-selected="false">Information
                            for Administrative Use
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="medicalAndHealthPurposeOnly-tab" data-bs-toggle="tab"
                                data-bs-target="#medicalAndHealthPurposeOnly"
                                type="button" role="tab" aria-controls="medicalAndHealthPurposeOnly"
                                aria-selected="false">Information for Medical and Health Purposes Only
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="motherDetails-tab" data-bs-toggle="tab"
                                data-bs-target="#motherDetails"
                                type="button" role="tab" aria-controls="motherDetails" aria-selected="false">Mother
                            Details
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="medicalAndHealthInfo-tab" data-bs-toggle="tab"
                                data-bs-target="#medicalAndHealthInfo"
                                type="button" role="tab" aria-controls="medicalAndHealthInfo" aria-selected="false">
                            Medical and Health Information
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active  bgcolor1" id="home" role="tabpanel"
                         aria-labelledby="home-tab" >
                        <form action="show.php" method="post" enctype="multipart/form-data">
                            <div class="row m-auto">
                                <!--                                Column 1-->
                                <div class="col-sm-6 col-md-6 ">
                                    <p class="display-6">Child's Details</p>
                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3" >
                                            <label for="child_first_name">First name</label>
                                            <input type="text" class="form-control" id="child_first_name"
                                                   name="child_first_name">
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="child_middle_name">Middle name</label>
                                            <input type="text" class="form-control" id="child_middle_name"
                                                   name="child_middle_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3">
                                            <label for="child_last_name">Last name</label>
                                            <input type="text" class="form-control" id="child_last_name"
                                                   name="child_last_name">
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="child_suffix">Suffix</label>
                                            <input type="text" class="form-control" id="child_suffix" name="child_suffix">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="child_time_of_birth">Time of Birth(24hr)</label>
                                            <input type="text" class="form-control timepicker" id="child_time_of_birth"
                                                   name="child_time_of_birth">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3">
                                            <label for="child_gender">Gender</label>
                                            <select class="form-select" aria-label="child_gender" name="child_gender">
                                                <option value="male" selected>Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="child_date_of_birth">Date of Birth(Mo/Day/Yr)</label>
                                            <input type="text" class="form-control datepicker" id="child_date_of_birth"
                                                   name="child_date_of_birth">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="child_facility_namechild_facility_name">Facility Name (If not institution, give
                                                street and number)</label>
                                            <input type="text" class="form-control" id="child_facility_name"
                                                   name="child_facility_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="child_location_of_birth">City, Town, or Location of Birth</label>
                                            <input type="text" class="form-control" id="child_location_of_birth"
                                                   name="child_location_of_birth">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="child_country_of_birth">County of Birth</label>
                                            <input type="text" class="form-control" id="child_country_of_birth"
                                                   name="child_country_of_birth">
                                        </div>
                                    </div>



                                </div>
                            </div>


                            <div class="d-grid gap-2 col-2 mx-auto pb-5">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="adminstrative" role="tabpanel" aria-labelledby="adminstrative-tab">
                        <h1>Information for Administrative Use</h1>
                    </div>
                    <div class="tab-pane fade" id="medicalAndHealthPurposeOnly" role="tabpanel"
                         aria-labelledby="medicalAndHealthPurposeOnly-tab">
                        <h1>Information for Medical and Health Purposes Only</h1>
                    </div>
                    <div class="tab-pane fade" id="motherDetails" role="tabpanel" aria-labelledby="motherDetails-tab">
                        <h1>Mother Details</h1>
                    </div>
                    <div class="tab-pane fade" id="medicalAndHealthInfo" role="tabpanel"
                         aria-labelledby="medicalAndHealthInfo-tab">
                        <h1>Medical and Health Information</h1>
                    </div>
                </div>

            </div>
        </div>
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
