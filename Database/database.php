<?php 
include_once('./connection.php');

class database extends connection
{   
    public function __construct()
    {
        parent::__construct();


        if(session_status() == PHP_SESSION_NONE)
        {
            session_status();
        }
    }
}