<?php
session_start();
    $user=$_POST['id'];
    $password=$_POST['password'];
    if($user=='Admin' and $password=='Admin@biddmart@1')
    {
        $_SESSION["user"]=$user;
        header("location:../links/adminview.php");
        $_SESSION['pass']="passed";
    }
    else{
        echo "<script>alert('please provide correct user and password')</script>";
        echo "<script> window.open('../links/login.html')</script>";
    }


?>