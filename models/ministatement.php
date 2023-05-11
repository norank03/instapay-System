<?php

class ministatement{

private $transid;
private  $amount;
private $transtype;
private $owner;
private $time;


public function gettransid(){
    return $this->transid;
}

public function setamount($amount){
    
    $this->amount=$amount;
}

public function getamount(){

    return $this->amount;
}

public function settranstype($transtype){
    
    $this->transtype=$transtype;
}

public function gettranstype(){

    return $this->transtype;
}

public function setowner($owner){
    
    $this->owner=$owner;
}

public function getowner(){

    return $this->owner;
}

public function settime($time){
    
    $this->time=$time;
}

public function gettime(){

    return $this->time;
}




}



?>