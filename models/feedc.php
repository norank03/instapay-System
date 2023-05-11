<?php
session_start();
include_once'../controllers/d.php';
class Feedback
{

    private $desc;
    protected $v;
    protected $ip;
    protected$status;
    public function setdec($dsc)
    {
    
      $this->desc=$dsc;

    }


    public function gdec($dsc)
    {
      
       $this->v=new dbc;
       $this->status='Not Fixed Yet';
       $this->ip=$_SESSION['ipa'];
    
       $this->v->fedd($this->desc,$this->ip, $this->status);

    }

}


?>