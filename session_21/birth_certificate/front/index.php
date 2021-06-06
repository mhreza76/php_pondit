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
    <link rel="stylesheet" href="./public/css/datepicker.css">
    <script src="./public/js/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function(){
            $('#childTimeOfBirth').timepicker({
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
                         aria-labelledby="home-tab">
                        <form action="./public/store.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!--                                Column 1-->
                                <div class="col-sm-5 col-md-5">
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
                                            <label for="childTimeOfBirth">Time of Birth(24hr)</label>
                                            <input type="text" class="form-control timepicker" id="childTimeOfBirth"
                                                   name="childTimeOfBirth">
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
                                            <label for="childFacilityName">Facility Name (If not institution, give
                                                street and number)</label>
                                            <input type="text" class="form-control" id="childFacilityName"
                                                   name="childFacilityName">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="childLocationOfBirth">City, Town, or Location of Birth</label>
                                            <input type="text" class="form-control" id="childLocationOfBirth"
                                                   name="childLocationOfBirth">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="childCountyOfBirth">County of Birth</label>
                                            <input type="text" class="form-control" id="childCountyOfBirth"
                                                   name="childCountyOfBirth">
                                        </div>
                                    </div>


                                    <!--                                Father Details-->
                                    <p class="display-6">Father's Details</p>
                                    <p>FATHER'S CURRENT LEGAL NAME</p>
                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3">
                                            <label for="fatherFirstname">First name</label>
                                            <input type="text" class="form-control" id="fatherFirstname"
                                                   name="fatherFirstname">
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="fatherMiddleName">Middle name</label>
                                            <input type="text" class="form-control" id="fatherMiddleName"
                                                   name="fatherMiddleName">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3">
                                            <label for="fatherLastName">Last name</label>
                                            <input type="text" class="form-control" id="fatherLastName"
                                                   name="fatherLastName">
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="fatherSuffix">Suffix</label>
                                            <input type="text" class="form-control" id="fatherSuffix"
                                                   name="fatherSuffix">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="fatherDateOfBirth">Date of Birth(Mo/Day/Yr)</label>
                                            <input type="text" class="form-control" id="fatherDateOfBirth"
                                                   name="fatherDateOfBirth">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="fatherBirthplace">Birthplace (State, Territory,or Foreign
                                                Country)</label>
                                            <input type="text" class="form-control" id="fatherBirthplace"
                                                   name="fatherBirthplace">
                                        </div>
                                    </div>

                                    <!--                                Certifier Details-->
                                    <p class="display-6">Certifier Details</p>
                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="certifierName">Certifier's Name</label>
                                            <input type="text" class="form-control" id="certifierName"
                                                   name="certifierName">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="certifierName">Title</label>
                                        <div class="title form-group row">
                                            <div class="form-check mb-3 col-md-1">
                                                <input class="form-check-input" type="checkbox" name="certifierTitle[]"
                                                       id="md"
                                                       value="md">
                                                <label class="form-check-label" for="md"> MD</label>
                                            </div>
                                            <div class="form-check mb-3 col-1">
                                                <input class="form-check-input" type="checkbox" name="certifierTitle[]"
                                                       id="do"
                                                       value="do">
                                                <label class="form-check-label" for="do">DO</label>
                                            </div>
                                            <div class="form-check mb-3 col-3">
                                                <input class="form-check-input" type="checkbox" name="certifierTitle[]"
                                                       id="hospitalAdmin"
                                                       value="hospital admin">
                                                <label class="form-check-label" for="hospitalAdmin">HOSPITAL
                                                    ADMIN</label>
                                            </div>
                                            <div class="form-check mb-3 col-3">
                                                <input class="form-check-input" type="checkbox" name="certifierTitle[]"
                                                       id="cnmCm"
                                                       value="cnm/cm">
                                                <label class="form-check-label" for="cnmCm">CNM/CM</label>
                                            </div>
                                            <div class="form-check mb-3 col-3">
                                                <input class="form-check-input" type="checkbox" name="certifierTitle[]"
                                                       id="otherMidwife"
                                                       value="other midwife">
                                                <label class="form-check-label" for="otherMidwife">OTHER MIDWIFE</label>
                                            </div>
                                            <div class="form-check mb-3 col">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label"
                                                       for="otherSpecify">OTHER(Specify)</label>
                                                <div class="col-md-12 mb-3">
                                                    <input type="text" class="form-control" id="otherSpecify"
                                                           name="certifierTitle[]">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-5 mb-3">
                                            <label for="certifierDateCertified">Date Certified(Mo/Day/Yr)</label>
                                            <input type="text" class="form-control" id="certifierDateCertified"
                                                   name="certifierDateCertified">
                                        </div>
                                        <div class="col-md-2 mb-3"></div>
                                        <div class="col-md-5 mb-3">
                                            <label for="certifierDateFieldByRegister">Date Field by Register(Mo/Day/Yr)</label>
                                            <input type="text" class="form-control" id="certifierDateFieldByRegister"
                                                   name="certifierDateFieldByRegister">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="certifierTelephone">Telephone</label>
                                            <input type="number" class="form-control" id="certifierTelephone"
                                                   name="certifierTelephone">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="certifierUr">UR#</label>
                                            <input type="text" class="form-control" id="certifierUr"
                                                   name="certifierUr">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="certifierReferringHospital">Referring Hospital</label>
                                            <input type="text" class="form-control" id="certifierReferringHospital"
                                                   name="certifierReferringHospital">
                                        </div>
                                    </div>
                                </div>


                                <!--                                Column 2-->
                                <div class="col-sm-2 offset-sm-2 col-md-2 offset-md-0"></div>

                                <!--                                Column 3-->
                                <div class="col-sm-5 offset-sm-2 col-md-5 offset-md-0">
                                    <p class="display-6">Mother's Details</p>
                                    <p>MOTHER'S CURRENT LEGAL NAME</p>
                                    <div class="form-group row">
                                        <div class="form-group row">
                                            <div class="col-md-5 mb-3">
                                                <label for="motherCurrentFirstname">First name</label>
                                                <input type="text" class="form-control" id="motherCurrentFirstname"
                                                       name="motherCurrentFirstname">
                                            </div>
                                            <div class="col-md-2 mb-3"></div>
                                            <div class="col-md-5 mb-3">
                                                <label for="motherCurrentMiddleName">Middle name</label>
                                                <input type="text" class="form-control" id="motherCurrentMiddleName"
                                                       name="motherCurrentMiddleName">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-5 mb-3">
                                                <label for="motherCurrentLastName">Last name</label>
                                                <input type="text" class="form-control" id="motherCurrentLastName"
                                                       name="motherCurrentLastName">
                                            </div>
                                            <div class="col-md-2 mb-3"></div>
                                            <div class="col-md-5 mb-3">
                                                <label for="motherCurrentSuffix">Suffix</label>
                                                <input type="text" class="form-control" id="motherCurrentSuffix" name="motherCurrentSuffix">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-5">
                                                <label for="motherCurrentDateOfBirth">Date of Birth(Mo/Day/Yr)</label>
                                                <input type="text" class="form-control" id="motherCurrentDateOfBirth"
                                                       name="motherCurrentDateOfBirth">
                                            </div>
                                        </div>


                                        <p>MOTHER'S NAME Prior to First Marriage</p>
                                        <div class="form-group row">
                                            <div class="col-md-5 mb-3">
                                                <label for="motherPriorFirstname">First name</label>
                                                <input type="text" class="form-control" id="motherPriorFirstname"
                                                       name="motherPriorFirstname">
                                            </div>
                                            <div class="col-md-2 mb-3"></div>
                                            <div class="col-md-5 mb-3">
                                                <label for="motherPriorMiddleName">Middle name</label>
                                                <input type="text" class="form-control" id="motherPriorMiddleName"
                                                       name="motherPriorMiddleName">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-5 mb-3">
                                                <label for="motherPriorLastName">Last name</label>
                                                <input type="text" class="form-control" id="motherPriorLastName"
                                                       name="motherPriorLastName">
                                            </div>
                                            <div class="col-md-2 mb-3"></div>
                                            <div class="col-md-5 mb-3">
                                                <label for="motherPriorSuffix">Suffix</label>
                                                <input type="text" class="form-control" id="motherPriorSuffix" name="motherPriorSuffix">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorBirthplace">Birthplace (State, Territory,or Foreign
                                                    Country)</label>
                                                <input type="text" class="form-control" id="motherPriorBirthplace"
                                                       name="motherPriorBirthplace">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorResidence">Residence of Mother-State</label>
                                                <input type="text" class="form-control" id="motherPriorResidence"
                                                       name="motherPriorResidence">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorCounty">County</label>
                                                <input type="text" class="form-control" id="motherPriorCounty"
                                                       name="motherPriorCounty">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorLocation">City, Town, or Location</label>
                                                <input type="text" class="form-control" id="motherPriorLocation"
                                                       name="motherPriorLocation">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorStreet">Street and Number</label>
                                                <input type="text" class="form-control" id="motherPriorStreet"
                                                       name="motherPriorStreet">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <label for="motherPriorApartment">Apartment No</label>
                                                <input type="text" class="form-control" id="motherPriorApartment"
                                                       name="motherPriorApartment">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-5 mb-3">
                                                <label for="motherPriorZipCode">Zip Code</label>
                                                <input type="number" class="form-control" id="motherPriorZipCode"
                                                       name="motherPriorZipCode">
                                            </div>

                                            <div class="col-md-5 mb-3">
                                                <!--                                                <p>Inside City Limits?</p>-->
                                                <label for="motherPriorZipCode">Inside City Limits?</label>
                                                <div class="mt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="toggle" id="inside_city_limits_yes" value="1">
                                                        <label class="form-check-label" for="inside_city_limits_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="toggle" id="inside_city_limits_no" value="0">
                                                        <label class="form-check-label" for="inside_city_limits_no">No</label>
                                                    </div>
                                                </div>
                                            </div>
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
