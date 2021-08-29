<?php 
class Connection {

    protected $isconnected;
    protected $db;
    protected $transaction;

    public function __construct($username="root" , $password="" , $host="localhost" ,$dbname="laundry" ,$options = [])

    {
        $this->isconnected = true;
        try 
        {
            $this->db = new PDO("mysql:host={$host}; , dbname={$dbname}; charset=utf8" , $username , $password , $options);
            $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $this->transaction = $this->db;
            $this->db->setAttribute(PDO::attr_def)
        }   
    }




}