<?php


namespace App;


class Person
{
    public $child_first_name = null;
    public $child_middle_name = null;
    public $child_last_name = null;
    public $child_suffix = null;

    public function __construct($person){

        $this->child_first_name = $person['child_first_name'];
        $this->child_middle_name = $person['child_middle_name'];
        $this->child_last_name = $person['child_last_name'];
        $this->child_suffix = $person['child_suffix'];
    }
}
