<?php


namespace App\ChildDetails;


class ChildDetails
{
    public $child_first_name = null;
    public $child_middle_name = null;
    public $child_last_name = null;
    public $child_suffix = null;

    public $child_gender = null;

    public $child_time_of_birth = null;
    public $child_date_of_birth = null;

    public $child_facility_name = null;
    public $child_location_of_birth = null;
    public $child_country_of_birth = null;


    public function __construct($person){

        $this->child_first_name = $person['child_first_name'];
        $this->child_middle_name = $person['child_middle_name'];
        $this->child_last_name = $person['child_last_name'];
        $this->child_suffix = $person['child_suffix'];

        $this->child_gender = $person['child_gender'];

        $this->child_time_of_birth = $person['child_time_of_birth'];
        $this->child_date_of_birth = $person['child_date_of_birth'];

        $this->child_facility_name = $person['child_facility_name'];
        $this->child_location_of_birth = $person['child_location_of_birth'];
        $this->child_country_of_birth = $person['child_country_of_birth'];

    }
}