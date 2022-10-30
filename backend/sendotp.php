<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');
    include"config.php";
    $email=$_POST['email'];
    $_SESSION["email"]=$email;
    if($email=="")
        {
            echo"<script> alert('please provide an email address')</script>";
            echo"<script> window.open('../links/login.php','_self')</script>";  
        }      
    else
        {
            $query="SELECT 'email' FROM `account` WHERE `email`='$email'";
            $run=mysqli_query($conn,$query);
            $fetch=mysqli_num_rows($run);   
            if($fetch==1)
                {
                    echo "<script> alert('email already exists!')</script>";
                    echo"<script>window.open('../links/login.php','_self') </script>";
                }
                else
                {
                    $otp=(rand(1000,9999));
                    $mail = new PHPMailer(true);
                    try
                        {
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'projectbiddmart@gmail.com';                     //SMTP username
                            $mail->Password   = 'Biddmart@123';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`           
                            $mail->setFrom('projectbiddmart@gmail.com','BIDDMART');
                            $mail->addAddress($email);                                  //Add a recipient
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Biddmart';
                            $mail->Body    = 'Welcome to BIDDMART<br><br>This OTP is for Your Biddmart Suscription<br><br>Please Do not share with Anyone.<br><br>Your OTP is :' .$otp;
                            $mail->AltBody = $otp;
                            $mail->send();
                        } 
                    catch (Exception $e) 
                        {
                             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }   
                    $query="INSERT INTO `otpverify` (`email`,`otp`) VALUES('$email','$otp')";
                    $run=mysqli_query($conn,$query);
                    header("location:javascript://history.go(-1)");
                }                       
        }         
?>