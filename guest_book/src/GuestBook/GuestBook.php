<?php


namespace App\GuestBook;


class GuestBook
{
    public $full_name = null;
    public $comment = null;

    public function __construct($data){
        $this->full_name = $data['full_name'];
        $this->comment = $data['comment'];
    }
}