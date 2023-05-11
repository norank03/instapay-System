<?php
session_start();
include_once'../controllers/d.php';

;
class balance
{

    protected $ip;
    protected $i;
    

   
    public function getbalance()
    {
        $this->i=new dbc;
        $this->ip=$_SESSION['ipa'];
        $this->i->balance($this->ip);


    }



}



?>