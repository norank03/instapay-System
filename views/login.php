<?php
 require_once'../models/userl.php';
require_once'../controllers/Authcontrol.php'; 
$errmsg="";
 session_start();
if(isset($_POST['ipa']) && isset($_POST['password'])){

    if(!empty($_POST['ipa']) && !empty($_POST['password']))
    {
 
        $user=new User;
        $ipa=$_POST['ipa'];
        $password=$_POST['password'];
        $user->setipa($ipa);
        $user->setpassword($password);
        $auth=new Authcontrol;
        #$auth->login($user);
        if(!$auth->login($user))
        {
            if(!isset($_SESSION["ipa"]))
            {
                
            }
            echo "error message";
        }
        else
        {
            if(!isset($_SESSION["ipa"]))
            {
                session_start();
            }
            if($_SESSION["roleid"]=="Admin")
            {
                header("location: tables.php");
            }
            else
            {
                header("location: index.php");
            } 
        }
    }
        else
        {
            echo "please fill all fields";
        }    
   
    }
   
 
    echo $_SESSION['ipa'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script>
function validateForm() {
  var x = document.forms["myForm"]["ipa"].value;
  var y = document.forms["myForm"]["password"].value;

  if ((x == "" || x == null)&&(y=="" || y==null)) {
    alert("ipa or password must be filled out");
    return false;
  }
  else if ((x == "" || x == null)) {
    alert("ipa must be filled out");
    return false;
  }
  else if(y=="" || y==null){
    alert("Password must be filled out");
    return false;
  }
}
</script>

    <title>SB Admin 2 - Login</title>

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
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                   
                                    <form class="user" name="myForm"  onsubmit="return validateForm()" method="post" required>
                                        <div class="form-group">
                                            <input type="text"  class="form-control form-control-user"
                                             id="exampleInputEmail" aria-describedby="emailHelp" name="ipa"
                                                placeholder="Enter IPA">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="IPN">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" a href="login.php" class="btn btn-primary btn-user btn-block" value="Login" name="login">
                                            
                                      
                                           
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="admin.php">Login A Admin</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
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
