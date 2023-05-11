<?php
require_once '../controllers/databaseController.php';
session_start();
class transactionController
{
    protected $db;

     public function sendipa(transaction $trans)
     {
         $this->db=new dbcontroller();
        if($this->db->openconnection()) {
            $ipa=$_SESSION['ipa'];
             $amount=$trans->getamount();
            $typeid=$trans->gettypeid();
            $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid) ";//EDited  ///lobna123 must be changed with session(sender)

             return  $this->db->insert($query);

         }

     }

 public function sendbankacc(transaction $trans)
 {
     $this->db=new dbcontroller();
      if($this->db->openconnection()) {
        $ipa=$_SESSION['ipa'];
         $amount=$trans->getamount();
         $typeid=$trans->gettypeid();
        $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid) ";//EDited  ///lobna123 must be changed with session(sender)

         return  $this->db->insert($query);

     }

 }

public function sendbankcard(transaction $trans)
{
    $this->db=new dbcontroller();
    if($this->db->openconnection()) {
        $ipa=$_SESSION['ipa'];
        $amount=$trans->getamount();
        $typeid=$trans->gettypeid();
        $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid) ";//EDited  ///lobna123 must be changed with session(sender)

        return  $this->db->insert($query);

     }
 }

 public function sendwallet(transaction $trans)
{
    $this->db=new dbcontroller();
   if($this->db->openconnection()) {
       $ipa=$_SESSION['ipa'];
        $amount=$trans->getamount();
        $typeid=$trans->gettypeid();
        $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid) ";//EDited  ///lobna123 must be changed with session(sender)

         return  $this->db->insert($query);

     }

 }

 public function sendmobile(transaction $trans)
 {
     $this->db=new dbcontroller();
     if($this->db->openconnection()) {
         $ipa=$_SESSION['ipa'];
        $amount=$trans->getamount();
        $typeid=$trans->gettypeid();
        $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid)   ";//EDited  ///lobna123 must be changed with session(sender)

         return  $this->db->insert($query);

    }

 }

/////////////////////////////////////////////

public function updatesenderbalance(transaction $trans)
{
    $res1="";
    $currentbalanceofsender="";

    $this->db= new dbcontroller();
    if ($this->db->openconnection()) {
        $ipa=$_SESSION['ipa'];
        $query="SELECT balance FROM bankaccount where ipa='$ipa' ";//SESSION['ipa'] or $trans->getipa()
        $res1=$this->db->select($query);

        $currentbalanceofsender=$res1[0]['balance'] - $trans->getamount();
        //echo  $currentbalanceofsender;

        $query2="UPDATE bankaccount set balance = $currentbalanceofsender where ipa ='$ipa' "; //SESSION['ipa'] or $trans->getipa()
        $this->db->update($query2);
       $trc=new transactionController() ;
       $trc->updatecardbalance($currentbalanceofsender);

        


        //reciever
    }
}


     public function updatecardbalance($currentbalanceofsender)
     {

         $this->db= new dbcontroller();
         if ($this->db->openconnection()) {
            $ipa=$_SESSION['ipa'];

             $query3="UPDATE bankcard set cardbalance = $currentbalanceofsender where ipa ='$ipa'"; //SESSION['ipa'] or $trans->getipa()


             $this->db->update($query3);
         }
     }


     public function updateipareciever($recipa, transaction $trans)
     {

         $this->db= new dbcontroller();
         if ($this->db->openconnection()) {
           
             $query="SELECT balance FROM bankaccount where ipa= '$recipa' ";//SESSION['ipa'] or $trans->getipa()
             $res1=$this->db->select($query);

             $currentbalanceofreciever=$res1[0]['balance'] + $trans->getamount();
             //echo  $currentbalanceofsender;

             $query2="UPDATE bankaccount set balance = $currentbalanceofreciever where ipa ='$recipa' "; //SESSION['ipa'] or $trans->getipa()

             

             $trac=new transactionController ;  //new
             $trac->updatecardbalanceofreciever($currentbalanceofreciever,$recipa);  //new

             return $this->db->update($query2);
    //reciever

             //reciever
         }

     }
     public function updatecardbalanceofreciever($currentbalanceofreciever,$reieveripa){//NEW KOLAHA

        $this->db= new dbcontroller;
        if ($this->db->openconnection()){
           
        $query3="UPDATE bankcard set cardbalance = $currentbalanceofreciever where ipa ='$reieveripa' "; //SESSION['ipa'] or $trans->getipa()
             
      
        $this->db->update($query3);
        }
       }

       public function updatemobilereciever($mobileofreciever,transaction $transa){

        $res="";
        $this->db= new dbcontroller;
        if ($this->db->openconnection()){
           
         $query="SELECT balance FROM bankaccount INNER JOIN user ON bankaccount.ipa=user.ipa WHERE mobilenumber='$mobileofreciever' ";//SESSION['ipa'] or $trans->getipa()
         $res1=$this->db->select($query);
         
         //print_r($res1);
        $currentbalanceofreciever=$res1[0]['balance'] + $transa->getamount();
       
         
        $query2="SELECT ipa FROM user  WHERE mobilenumber='$mobileofreciever' ";//SESSION['ipa'] or $trans->getipa()
        $res2=$this->db->select($query2);
        
       
         $recieveripa=$res2[0]['ipa'];
      
        $query3="UPDATE bankaccount set balance = $currentbalanceofreciever where ipa ='$recieveripa' "; //SESSION['ipa'] or $trans->getipa()
       
       $this->db->update($query3);
      
      $transc=new transactionController ;//new
       $transc->updatecardbalanceofreciever($currentbalanceofreciever,$recieveripa);//new
      
       }
      
      }
    ///////////////////////////////////////////////////////////////

      public function askipa(transaction $trans){

        $this->db=new dbcontroller;
        if($this->db->openconnection()){
           $ipa=$_SESSION['ipa'];
            $amount=$trans->getamount();
            $typeid=$trans->gettypeid(); 
           
            $query="INSERT INTO  transaction values ('','$ipa',CURRENT_TIMESTAMP,$amount,$typeid) ";//EDited  ///lobna123 must be changed with session(reciever)
      
          return  $this->db->insert($query);
        
        }
      
       }
      
      
       public function updatsenderofrecieverbalance(transaction $transa,$senderipa){
      
        $res1="";
        $currentbalanceofsender="";
              
               $this->db= new dbcontroller;
               if ($this->db->openconnection()){
                
                $query="SELECT balance FROM bankaccount where ipa='$senderipa' ";//SESSION['ipa'] or $trans->getipa()
                $res1=$this->db->select($query);
                
                $currentbalanceofsender=$res1[0]['balance'] - $transa->getamount();
                //echo  $currentbalanceofsender;
        
               $query2="UPDATE bankaccount set balance = $currentbalanceofsender where ipa ='$senderipa' "; //SESSION['ipa'] or $trans->getipa()
               $this->db->update($query2);
                   $trc=new transactionController ;
                   $trc->updatecardbalanceofsender($currentbalanceofsender,$senderipa);
              
               
              //reciever
               }
       }
              
       public function updatecardbalanceofsender($currentbalanceofsender,$senderipa){
      
        $this->db= new dbcontroller;
        if ($this->db->openconnection()){
           
        $query3="UPDATE bankcard set cardbalance = $currentbalanceofsender where ipa ='$senderipa' "; //SESSION['ipa'] or $trans->getipa()
             
      
        $this->db->update($query3);
        }
      
       }
      
      public function updaterecieverofsender(transaction $trans){
      
      
        $this->db= new dbcontroller;
        if ($this->db->openconnection()){
            $ipa=$_SESSION['ipa'];
         $query="SELECT balance FROM bankaccount where ipa='$ipa' "; //MUST BE CHANGED WITH isa SESSION['ipa'] or $trans->getipa()
         $res1=$this->db->select($query);
         
         $currentbalanceofreciever=$res1[0]['balance'] + $trans->getamount();
         //echo  $currentbalanceofsender;
      
        $query2="UPDATE bankaccount set balance = $currentbalanceofreciever where ipa ='$ipa' "; //SESSION['ipa'] or $trans->getipa()
       
       $this->db->update($query2);
      
       $trac=new transactionController ;//new
       $trac->updatecardbalanceofreciever($currentbalanceofreciever,$ipa);//lobna123 must be changed with session['ipa']
       //reciever//note
        }
      
      }
     


}



?>