<?php

class user
{

private $aa;
private $bb;
private $cc;

private $dd;

private $ee;
private $ff;
private $gg;
private $hh;
private $ii;
private $rr;
private $gd;
private $biin;

public function setr($a,$b,$c,$e,$f,$g,$h,$i,$result,$bin)
{

    $this->aa=$a;
    $this->bb=$b;
    $this->cc=$c;
  
    $this->ee=$e;
    $this->ff=$f;
    $this->gg=$g;
    $this->hh=$h;
    $this->ii=$i;
    $this->rr=$result;
    $this->biin=$bin;

}

public function gett()
{
$this->gd=new dbc;
$this->gd->register($this->aa,$this->bb,$this->cc,$this->ee,$this->ff,$this->gg,$this->hh,$this->ii,$this->rr,$this->biin);

}



}

?>