<?php
session_start();
include"config.php";
$email=$_SESSION["email"];
$otp=$_POST['otp'];
$encotp=md5($otp);
$query="SELECT`email`,`otp`FROM `otpverify` WHERE `email`='$email'AND `otp`='$otp'";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
    $fetch= mysqli_num_rows($run);
    if($fetch==1)
    {
        $query="DELETE FROM `otpverify` WHERE `email`='$email'";
        $run=mysqli_query($conn,$query);
        echo "<script> alert('otp send sucessfully!')</script>";
        header("location:javascript://history.go(-1)");
       
    }
    else{
        echo "<script> alert('otp does not matched!')</script>";
        echo"<script>window.open('../links/login.php','_self')</script>";
    }
}
else{
    echo"query failed";
}




?>