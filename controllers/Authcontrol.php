<?php

require_once '../models/userl.php';
require_once '../controllers/DBcontroller25.php'; 

class Authcontrol
{
    protected $db;
    
//1 open connection
//2 run query ad logic
//3 close connection
    public function login(User $user)
    {
 $this->db =new DBcontroller25;
 
 if($this->db->openConnection1())
      {
        $ipa=$user->getipa();
        $password=$user->getpassword();
        $query="Select * from  user where ipa='$ipa' and password='$password'";
        $result=$this->db->Select($query);
       
         if($result===false)
        {
            
                echo "Error in query";
                return false;
        }
       else
            {
                if(count($result)==0)
              {
            session_start();
            $_SESSION["errmsg"]="you have entered wrong data";
            echo "Wrong data";
            
            return false;
             
            }
            else
            {
            session_start();
            $_SESSION["ipa"]=$result[0]["ipa"];
            $_SESSION["password"]=$result[0]["password"];
            if($result[0]["roleid"]==1)
                    {
                        $_SESSION["roleid"]="client";
                    }
                    else
                    {
                        $_SESSION["roleid"]="Admin";
                    }
                    $this->db->closeconnection1();
                    return true;
        }
    
    }
      }
   else
    {
        echo "Error in Database Connection";
        return false;

    }        
  
}
public function signup(User $user)
   {
$this->db =new DBcontroller25;

if($this->db->openConnection1())
     {
       $ipa=$user->getipa();
       $mobile=$user->getphone();
       $fname=$user->getfname();
       $lname=$user->getlname();
       $password=$user->getpassword();
       $email=$user->getemail();
       $query="insert into user values ('$ipa','$fname','$lname','$email','$password','$mobile',1) ";
        
       $result=$this->db->insert($query);
    
       if($result===false)
       {
        session_start();
        $_SESSION["ipa"]=$result;
        $_SESSION["firstname"]=$user->getfname();
        $_SESSION["lastname"]=$$user->getlname();  
        $_SESSION["email"]=$user->getemail();
        $_SESSION["password"]=$user->getpassword();
        $_SESSION["mobilenumber"]=$user->getphone();
        $_SESSION["roleid"]="client";
        $this->db->closeConnection1();
        return true;
       }
       
      else
           {
              echo"try agian";
            $this->db->closeConnection1();
               return false;
           }
       }
   
else
   {
       echo "Error in Database Connection";
       return false;

   }        
  } 
}


?>
