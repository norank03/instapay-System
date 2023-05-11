<?php
 require_once '../controllers/databaseController.php';
session_start();
 class cardController{

    protected $db;
    public function showcarddetails(){
        $dd=$_SESSION['ipa'];
        $this->db=new dbcontroller;
        if ($this->db->openconnection()){
           $query="SELECT * FROM bankcard WHERE ipa='$dd'"; //MUST BE EDITED AFTER USING SESSION// session["ipa"]
           return  $this->db->select($query);
        }
        else {
            echo 'error in connection';
        }
       
    }

    }

 




?>