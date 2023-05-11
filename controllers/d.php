<?php
session_start();
class dbc

{ 
     public $bb ;
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPassword="";
    public $dbName="payfast";
    public $connection;

     public function openConnection()
     {
        $this->connection=new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        
        if($this->connection->connect_error)
        {
              echo"Error in Connection : ".$this->connection->connect_error;
              return false;

         
        }

        else
        {
            return true;
        }

    }

    public function closeConnection()
      {
         if($this->connection)
         {
          $this->connection->close();
         }
        else
         {
           echo "Connection is not opened";
          }
        }

        public function updateuser($ff,$l2,$m1,$e1,$ip)
        {
            $this->bb=new dbc;
            if($this->bb->openConnection())
            {

                $w = "SELECT *FROM `user` ";
                $r=mysqli_query($this->bb->connection,$w);
               
                while ($out=mysqli_fetch_assoc($r))
                {  
                     echo $out['ipa'];
                   
                     $f = "UPDATE user set firstname='".$ff."',lastname='".$l2."',email='".$e1."',mobilenumber='".$m1."' WHERE ipa='".$ip."'";
                     $lt=mysqli_query($this->bb->connection,$f);
                     $out=mysqli_fetch_assoc($r);
               
                    }

            }
           
        }

        public function fedd($rr,$ro,$ss)
        {
          $this->bb=new dbc;
            if($this->bb->openConnection())
            {
         
               $ll = "INSERT INTO `feedback`(`description`,`ipa`,`status`) VALUES ( '".$rr."','".$ro."','".$ss."') ";

              $t=mysqli_query($this->bb->connection,$ll);

            }
            else
            {
             echo"Error";
            }

        }



        public function balance($ipa)
        {
          $this->bb=new dbc;

          if($this->bb->openConnection())
          {
            $sv = "SELECT balance  FROM `bankaccount` WHERE ipa='".$ipa."' ";
             $rrult=mysqli_query($this->bb->connection,$sv);
            
           
            
              $rw=mysqli_fetch_assoc($rrult);
              if($rw)
                 {$n=$rw['balance'];
                  $_SESSION['balance']=$n;
                 }
            else
             {
              echo"Error";
             }
                
             }
            

        }

    

        public function register($a,$b,$c,$e,$f,$g,$h,$i,$result,$bin)
        {
            $this->bb=new dbc;
            if($this->bb->openConnection())
            {
                
              $tyo=rand(5000,1900000000);
                $ww ="INSERT INTO user VALUES ('".$c."','".$a."','".$b."','".$e."','".$g."','".$f."',1)";
                 $fhj="INSERT INTO bankaccount VALUES ('$i','$tyo','$c',$result)";
                $rtt=mysqli_query($this->bb->connection,$ww);
                 $rt=mysqli_query($this->bb->connection,$fhj);



                 $query3=" INSERT INTO bankcard VALUES ('$bin','debit','$tyo','$c','$result')";
                 $yu=mysqli_query($this->bb->connection,$query3);


                /*while ($out=mysqli_fetch_assoc($rtt))
                {  
                     echo $out['ipa'];
                   
                     $f = "UPDATE user set firstname='".$ff."',lastname='".$l2."',email='".$e1."',mobilenumber='".$m1."' WHERE ipa='".$ip."'";
                     $lt=mysqli_query($this->bb->connection,$f);
                     $out=mysqli_fetch_assoc($r);
               
                    }
 */
            }
           
        }


}



?>