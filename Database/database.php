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

    public function getrow($query , $param = [])
    {

        try 
        {
            $stmt = $this->db->prepare($query);
            $stmt->execute($param);
            return $stmt->fetch();
        }
        catch(PDOException $error)
        {
            throw new Exception($error->getMessage());
        }

    }

}