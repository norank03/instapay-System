<?php


class dbcontroller{

public $dbhost="localhost";
public $dbuser="root";
public $dbpassword="";
public $dbname="payfast";
public $connection;


public function openconnection(){
    $this->connection=new mysqli($this->dbhost,$this->dbuser,$this->dbpassword,$this->dbname);
    if ($this->connection->connect_error){
        echo'error in connnection'.$this->connection->connect_error;
        return false;
    }
    else {
        echo'connected successfully';
        return true;
    }}

public function closeconnection(){

  if ($this->connection){
      
    $this->connection->close();
    echo 'connection closed successfully';
  }
  else {
    echo 'connection is not opened';
  }
}



public function select($qry){
    $result=$this->connection->query($qry);
        if(!$result)
        {
            echo "Error : ".mysqli_error($this->connection);
            return false;
        }
        else
        {
           
             return $result->fetch_all(MYSQLI_ASSOC);
        }
}



public function delete($qry){

$result=$this->connection->query($qry);

if (!$result){

  echo "Error".mysqli_error($this->connection);
  return false;
}
else {
  echo 'deleted successfully';
  return $result; //ely hya asln true or false momkn aktbha true 
}

}

public function insert ($qry){

  $result=$this->connection->query($qry);
 if (!$result){
    echo 'error'.mysqli_error($this->connection);
    return false;
 }
 else {
  //$this->connection->insert_id;
  return true;
 }


}

public function update($qry){

  $result=$this->connection->query($qry);
 if (!$result){
    echo 'error'.mysqli_error($this->connection);
    return false;
 }
 else {
  
  return true;
 
}


}




}

?>