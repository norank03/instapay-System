<?php
require_once '../controllers/databaseController.php';

session_start();

class ministatementcontroller{
 
    protected $db;
    
    public function showministatement()
    {
       
            $this->db=new dbcontroller;
        if ($this->db->openconnection())
        {
            $dd=$_SESSION['ipa'];
           $query="SELECT * FROM TRANSACTION WHERE ipa='$dd' ";

           return  $this->db->select($query);
        }
        else {
            echo 'error in connection';
        }
       
    }
    

   

}



?>