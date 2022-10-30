<?php
include"config.php";
session_start();
    if($_POST['email']!=""&& $_POST['password']!="")
    {
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $query="SELECT `email`,`password`FROM `account` WHERE `email`='$email'AND `password`='$pwd'";
        $run=mysqli_query($conn,$query);
        $fetch=mysqli_num_rows($run);
            if($fetch==1)
                {
                    $_SESSION['user']=$email;
                    echo"<script>alert('log in sucessful')</script>";
                    echo"<script>window.open('../links/account.php','_self')</script>";                                      
                }
            else
                {
                echo"<script>alert('user not found')</script>";
                echo"<script>window.open('../links/login.php','_self')</script>";
                }       
    }
    else{
        echo"<script>alert('please check again')</script>";
        echo"<script>window.open('../links/login.php','_self')</script>";
    }



?>