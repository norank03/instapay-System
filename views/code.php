<?php
session_start();

require 'dbcon.php';

if(isset($_POST['delete_user']))
{
    $ipa = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user WHERE ipa='$ipa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Deleted Successfully";
        header("Location: tables.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Deleted";
        header("Location: tables.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $ipa = mysqli_real_escape_string($con, $_POST['ipa']);

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobilenumber = mysqli_real_escape_string($con, $_POST['mobilenumber']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);

    $query = "UPDATE user SET firstname='$firstname', email='$email', mobilenumber='$mobilenumber', lastname='$lastname' WHERE id='$ipa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Updated Successfully";
        header("Location: tables.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Updated";
        header("Location: tables.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobilenumber = mysqli_real_escape_string($con, $_POST['mobilenumber']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);


    $query = "INSERT INTO user (ipa,firstname,email,mobilenumber,lastname,roleid) VALUES ('3','$firstname','$email','$mobilenumber','$lastname','2')";
//ha5do men mariam
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user Created Successfully";
        header("Location: user-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Created";
        header("Location: user-create.php");
        exit(0);
    }
}

?>