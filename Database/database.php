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

    # for just one row
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
    # for all rows
    public function getrows($query , $param=[])
    {
        try 
        {
            $stmt = $this->db->prepare($query);
            $stmt->execute($param);
            return $stmt->fetchAll();

        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}