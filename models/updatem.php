<?php
include_once'../controllers/d.php';
session_start();
class userupdate
{

 protected  $db;

private $f;
private $l;
private $m;
private $e;
private $p;
private $pc;
public $ip;

 public function sett($f1,$l2,$m3,$e4,$p5,$pc5)
{
  
  $this->f=$f1;
  $this->l=$l2;
 $this->m=$m3;
  $this->e=$e4;
  $this->p=$p5;
 $this->pc=$pc5;


}

public function g()
{
  $this->db=new dbc;
    
    $this->ip=$_SESSION['ipa'];

   $this->db->updateuser($this->f,$this->l,$this->m,$this->e,$this->ip);


}




}

?>