<?php
require_once '../models/transaction.php';
require_once '../controllers/databaseController.php';
require_once '../controllers/transactionController.php';
session_start();



if (isset($_POST['amountfield'])&& isset($_POST['mobilefield'])){
     if((!empty($_POST['amountfield']))&&(!empty($_POST['mobilefield']))){
       
        $transa=new transaction;
        
        $transa->setamount($_POST["amountfield"]);
        $transa->settypeid(5);

        $transaContr=new transactionController;
       $result= $transaContr->sendmobile($transa);

       $transaContr->updatesenderbalance($transa);

       $mobileofreciever=$_POST['mobilefield'];//new
       $transaContr->updatemobilereciever($mobileofreciever, $transa);//new


     }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mobilenumber</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img src="../img/m.jpeg">
                        </img>
                        <style>
                img{
                       width:460px;
                       height : 700px;
                       
                }
                            </style>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Send via mobile number</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                               name="mobilefield" aria-describedby="usernameHelp"
                                                placeholder="Enter receiver mobile number..">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                             name="amountfield"  aria-describedby="moneyamountHelp"
                                                placeholder="amount of sending money">
                                        </div>
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    submit
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">transefer money</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          you submit succesfully..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                   
            </form>
            <style>     
            button{
               width: 340px;
               border: none;
               border-radius: 400px;
               display: inline-block;
            }
            </style>
                                                 
                                                                 
                    <button onclick="window.print()"class=" float-right  btn btn-sm btn-primary shadow-sm" name="report"><i class="fas fa-download fa-sm text-white-50"></i> print your transaction</button>                                  
                                        <br>
                                        <style>     
            .float-right{
               width:330px;
               height: 40px;
               border: none;
               border-radius: 400px;
               margin-right: 10px;
               margin-top: 10px;
               display: inline-block;
            }
            .btn{
               width: 330px;
              margin-left: 5px;
               border: none;
               border-radius: 400px;
               display: inline-block;
            }
            a{
                margin-top: 10px;
                margin-left: 8px;
                width:330px;
               height: 40px;
            }
            </style>
                                       
                                        <br>
                                        <a href="transactions.php" class="btn btn-primary btn-user btn-block">
                                           Back
                                        </a>
                                      
                                       
                                        
                                  
                                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
