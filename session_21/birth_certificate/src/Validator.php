<?php


namespace App;


class Validator
{
    public function is_empty($strvalue)
    {
        if(!empty($strvalue)){
            return true;
        }
        else
            return false;
    }
    public function has_alpha($strvalue)
    {
        if(ctype_alpha($strvalue)){
            return true;
        }
        else
            return false;
    }


    public function display_validation_errors($errors){
        echo '<ul>';
        foreach ($errors as $error){
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';

    }

}