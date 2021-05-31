<?php
$first_name = null;
$last_name = null;

function is_empty($strvalue): bool
{
    if(!empty($strvalue)){
        return true;
    }
    else
        return false;
}
function has_alpha($strvalue): bool
{
    if(ctype_alpha($strvalue)){
        return true;
    }
    else
        return false;
}

function validate_firstname($first_name): array
{
    $errors = [];
    if(!is_empty($first_name)){
        $errors[] = 'First Name should not be empty';

    }

    if(!has_alpha($first_name)){
        $errors[] = 'Use alphabet only in First Name';

    }
    return $errors;
}

function validate_lastname($last_name): array
{
    $errors = [];
    if(!is_empty($last_name)){
        $errors[] = 'Last Name should not be empty';
    }

    if(!has_alpha($last_name)){
        $errors[] = 'Use alphabet only in Last Name';

    }
    return $errors;
}


function display_validation_error_firstname($errors){
    echo '<ul>';
    foreach ($errors as $error){
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';

}

function display_validation_error_lastname($errors){
    echo '<ul>';
    foreach ($errors as $error){
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';

}

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
//    firstname
    if(array_key_exists('firstname', $_POST)){
        $first_name = $_POST['firstname'];
    }
    $errors = validate_firstname($first_name);
    if(count($errors) > 0){
        display_validation_error_firstname($errors);
        return;
    }


//    lastname
    if(array_key_exists('lastname', $_POST)){
        $last_name = $_POST['lastname'];
    }
    $errors = validate_lastname($last_name);
    if(count($errors) > 0){
        display_validation_error_lastname($errors);
        return;
    }else{
        echo '<strong>' . 'Your Full Name is: ' . $first_name . ' ' . $last_name . '.' . '</strong>';
    }


}


//drink
echo "<br>";
if(array_key_exists('drink', $_POST)){
    echo "You select drink: " . $_POST['drink'] . "<br>";
}else{
    echo "Please select your drink <br>";
}

//ice cream
$ice_cream = null;
if(array_key_exists('ice_cream', $_POST)){
    $ice_cream = $_POST['ice_cream'];
}
if(is_null($ice_cream)){
    echo "You don't have chosen any ice cream";
    return;
}

if(count($ice_cream) === 1){
    echo "Your choosen ice cream is:  " . $ice_cream[0];
}else{
    echo "Your choosen ice creams are:  " . implode(", ", $ice_cream);
}


//school
echo "<br>";
if(array_key_exists('school', $_POST)){
    echo "You School: " . $_POST['school'] . "<br>";
}else{
    echo "Please select your School <br>";
}

//comment
echo "<br>";
if(array_key_exists('comment', $_POST)){
    echo "You Comment: " . $_POST['comment'] . "<br>";
}else{
    echo "Please select your comment <br>";
}