<?php
class DBcontroller25{
public $dbHost1="localhost";
public $dbUser1="root";
public $dbPassword1="";
public $dbName1="payfast";
public $connection;
    public function openConnection1(){
       $this->connection=new mysqli($this->dbHost1,$this->dbUser1,$this->dbPassword1,$this->dbName1);
       if($this->connection->connect_error){
          echo"Error in connection:".$this->connection->connect_error;
          return false;
        }
          else
          {
            return true;
          }  
    }
    public function closeConnection1(){
        if($this->connection)
          {
              $this->connection->close();
          }
           else
           {
             echo"connection isn't open";
           }  
     }
public function Select($qry){
    $result=$this->connection->query($qry);
    if(!$result)
    {
        echo "Error :".mysqli_error($this->connection);
         return false;    
    }
    else
    {
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
 public function insert($qry){
  $result=$this->connection->query($qry);
  if(!$result)
  {
      echo "Error :".mysqli_error($this->connection);
       return false;    
  }
  else
  {
    return $this->connection->insert_id;
     
  }
} 
}
?>