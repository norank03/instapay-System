<?php

class transaction{

private  $id;
private $amount;
private $typeid;
private $ipa;
private $date;

public function setid($id){
  $this->id=$id;
}
public function getid(){
    return $this->id;
}


public function setamount($amount){
    $this->amount=$amount;
  }
  public function getamount(){
      return $this->amount;
  }

  public function settypeid($typeid){
    $this->typeid=$typeid;
  }
  public function gettypeid(){
      return $this->typeid;
  }

  public function setipa($ipa){
    $this->ipa=$ipa;
  }
  public function getipa(){
      return $this->ipa;
  }
  public function setdate($date){
    $this->date=$date;
  }
  public function getdate(){
      return $this->date;
  }




}




?>