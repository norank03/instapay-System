<?php


include_once'../Controllers/d.php';
include_once'../Models/user.php';

if(isset($_POST['first']) && isset($_POST['last']) && isset($_POST['ipa'])&& isset($_POST['email'])&& isset($_POST['mobile'])&& isset($_POST['password'])&& isset($_POST['repeat'])&& isset($_POST['accountnumber'])&& isset($_POST['bin']))
  {
      if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['ipa'])&& !empty($_POST['email'])&& !empty($_POST['mobile'])&& !empty($_POST['password'])&& !empty($_POST['repeat'])&& !empty($_POST['accountnumber'])&& !empty($_POST['bin']))
    {
        $a=$_POST['first'];
        $b=$_POST['last'];
        $c=$_POST['ipa'];
        
        $e=$_POST['email'];
        $f=$_POST['mobile'];
        $g=$_POST['password'];
        $h=$_POST['repeat'];
        $i=$_POST['accountnumber'];
       $bin=$_POST['bin'];
       $result;
      
       

        $selected=$_POST['dropdown'];

        if ($selected=="Saib"){
           
          $result=1;
        }
        else if ($selected=="Alahly"){
            $result=3;
           
        }
        else if ($selected=="Cib"){
                $result=12;
               
        }

        else if ($selected=="Hsbc"){
            $result=5;
           
        }
        else if ($selected=="Qnb"){
                $result=4 ;
               
        }

        else if ($selected=="Faisal"){
            $result=2;
        }
        else if ($selected=="Faib"){
                $result=13;
               
        }

        else if ($selected=="Nbk"){
            $result=14;
           
        }
        else if ($selected=="Arab"){
                $result=15;
               
        }
    
    


 
        $user=new user;
        $user->setr($a,$b,$c,$e,$f,$g,$h,$i,$result,$bin);
        $user->gett(); 
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

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"  name="first"   class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"   name="last"   class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="ipa"   class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="ipa">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-12">
                                        <input type="text" name="mobile"    class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="mobilenumber">
                                    </div>
                                   
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"   name="password"  class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="repeat"   class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                            
                                <h1 class="h4 text-gray-900 mb-4 m-auto">Enter Your Bank details</h1>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="accountnumber" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="account number">
                                    </div>
                                    

                                    <select class="form-select" name="dropdown">
      <option value ="Saib" >Saib</option>
      <option value="Alahly">Alahly</option>
      <option value="Cib">Cib</option>

      <option value ="Hsbc" >Hsbc</option>
      <option value="Qnb">Qnb</option>
      <option value="Faisal">Faisal</option>

      <option value ="Faib" >Faib</option>
      <option value="Nbk">Nbk</option>
      <option value="Arab">Arab bank</option>
    
    </select>

                                </div>
                            






                            <h1 class="h4 text-gray-900 mb-4 m-auto">Enter card details</h1>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Card Bin" name="bin">
                                    </div>
                                    
                                </div>

                                <input type="submit"  class="btn btn-google btn-user btn-block" value="register">

                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
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