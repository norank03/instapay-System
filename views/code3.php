<?php
session_start();
$_SESSION['ipa'];
$vv=$_SESSION['ipa'];

require 'dbcon.php';

if(isset($_POST['delete_bank']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_bank']);

    $query = "DELETE FROM feedback WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "bank Deleted Successfully";
        header("Location: banktables.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "bank Not Deleted";
        header("Location: banktables.php");
        exit(0);
    }
}

if(isset($_POST['update_bank']))
{
   

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $ipa = mysqli_real_escape_string($con, $_POST['ipa']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
   
    

    $query = "UPDATE feedback SET id='$id', ipa='$ipa', description='$description', status='Read' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "bank Updated Successfully";
        header("Location: feedback2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "bank Not Updated";
        header("Location: feedback2.php");
        exit(0);
    }

}


if(isset($_POST['save_bank']))
{
    
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    
    
   


    $query = "INSERT INTO bank (id,name,date) VALUES ('$id','$name','$date')";
//ha5do men mariam
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "bank Created Successfully";
        header("Location: bank-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "bank Not Created";
        header("Location: bank-create.php");
        exit(0);
    }
}

?>