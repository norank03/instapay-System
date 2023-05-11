<?php
include_once'../models/updatem.php';


if(isset($_POST['f1']) && isset($_POST['l1']) && isset($_POST['m']) && isset($_POST['e']) && isset($_POST['p']) && isset($_POST['pc']))
  {
      if(!empty($_POST['f1']) && !empty($_POST['l1'])&& !empty($_POST['m'])&& !empty($_POST['e'])&& !empty($_POST['p'])&& !empty($_POST['pc']))
    {
      echo "taken data";
      $ff=$_POST['f1'];
      $l2=$_POST['l1'];
        $m1=$_POST['m'];
       $e1= $_POST['e'];
      $p= $_POST['p'];
     $pc =$_POST['pc'];

      $u=new userupdate();
     $u->sett($ff,$l2,$m1,$e1,$p,$pc);
     $u->g();

    }
  else
   {
    echo"not taken";
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

    <title>Update Profile</title>

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
   

	<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h class="h4 text-gray-900 mb-4">Edit profile!</h>
                                    </div>
                                    <hr>
    
     

        
        <form class="form-horizontal"  method="post" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control form-control-user" type="text" name="f1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control form-control-user"  type="text" name="l1">
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile number:</label>
            <div class="col-lg-8">
              <input class="form-control form-control-user" type="text" name="m">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control form-control-user" type="text" name="e">
            </div>
          
    
          
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control form-control-user" type="password" name="p" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control form-control-user" type="password" name="pc">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

