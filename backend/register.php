<?php
session_start();
include'config.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $con=$_POST['Phone'];
    $pass=$_POST['Pw'];
    $conpass=$_POST['con-pw'];
    $villst=$_POST['villst'];
    $po=$_POST['po'];
    $ps=$_POST['ps'];
    $dist=$_POST['dist'];
    $locality=$_POST['locality'];
    $zip=$_POST['zip'];
    $email=$_SESSION["email"];
    $encpass=md5($pass);
if($pass==$conpass)
{
    $querry="INSERT INTO `account`(`fname`, `lname`, `phone`, `email`, `password`,`stvill`, `po`, `ps`, `dist`, `zip`, `locality`) VALUES ('$fname','$lname','$con','$email','$pass','$villst','$po','$ps','$dist','$locality','$zip')";
    $run=mysqli_query($conn,$querry);
    if($run==1)
    {
        echo "<script>alert('Account Created !')</script>";
        echo "<script> window.open('../links/login.php','_self')</script>";

    }
    else{
        echo "<script>alert('Some error detected!')</script>";
        echo "<script> window.open('../links/login.php','_self')</script>";
    }
}
else{
    echo "<script>alert('Some error detected!')</script>";
    echo "<script> window.open('../links/login.php','_self')</script>";
}
   
?>