<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/registervalidation.js"></script>
    <title>Biddmart | Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            font-family: 'Nunito', sans-serif;
        }
        .allview {
            height: 100vh;
            background: linear-gradient(to right bottom, #4CA1AF, #C4E0E5);
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .glass {
            height: 80vh;
            background: linear-gradient(to right bottom, #fdfdfd44, #fefefe66);
            width: 60%;
            border-radius: 20px;
            box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.26);
            display: flex;
        }
        .left {
            background-color: white;
            width: 30%;
            height: 100%;
            border-radius: 20px;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right{
            width: 69.5%;
            height: 100%;
            border-radius: 20px;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .left>.content {

            position: absolute;
            text-align: center;
            height: 50vh;
            width: 15%;
        }
        #login{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #sendotp{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: none;
        }
        #otpverify{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
          display: none;
        }
        #register{
            text-align: center;
            width: 66vh;
            height: 76vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: none;
        }
        #admin{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: none;
        }
        #register input{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        #sendotpforrecoverpassword{
            text-align: center;
            width: 80vh;
            height: 50vh;       
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;          
            display: none;
        }
        #otpverifyforrecoverpassword{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: none;           
        }
        #setpassword{
            text-align: center;
            width: 80vh;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: none;            
        }
        .regform{
            width: 80%;
        }
        .fl{
            display: flex;
        }
        form {
            width: 80%;
            margin: auto;
        }
        button {
            width: 100%;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: linear-gradient(to right bottom, #4ca2af93, #c4e0e58f);
            margin-bottom: 30px;
            margin-top: 30px;
        }
        form input{
            width: 90%;
            border-radius: 10px;
            background: none;
            border: 1px solid black;
            height: 30px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 5px;
        }
        form button{
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.536);
            width: 70%;
        }
        #fif{
            width: 50%;
            margin-left: 5px;
            margin-right: 5px;
        }
        .exitbtn img{
            height:50px;
            width:50px;
            position:fixed;
            z-index:4;
            margin-left: 55%;
            margin-top: 22px;
            
        }
        @media screen and (max-width: 1000px) {
            .glass {
            height: 80vh;
            width: 90%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .left {
            background-color: white;
            width: 100%;
            height: 20vh;
            border-radius: 20px;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right{
            width: 100%;
            height: 100%;
            border-radius: 20px;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }
         .left>.content {

            position: absolute;
            text-align: center;
            height: 16vh;
            width: 86%;
        }
        .content>.option button{
            width: 90px;
         margin: auto;
        margin-top: 20px
        }
        .option{
            display: flex;
        }
        #register{
            height: 60vh;
        }
}
    </style>
</head>

<body>
 
    
    <div class="allview">
        <section class="glass">
        <div class="exitbtn">
     <a href="../index.php"><img src="../img/exitlogo.png" alt=""></a>
 </div>
            <div class="left">
                <div class="content">
                    <div class="heading">
                        <h5>Welcome To Biddmart</h5>
                    </div>
                    <div class="option">
                        <button  onclick="mySignin()"> Sign in</button>
                        <button  onclick="mySignup()">Sign Up</button>
                        <button onclick="myAdmin()">Admin</button>
                    </div>
                </div>
             </div>
             <div class="right">
            <div id="login">
                <div class="heading">
                    <h5>LOG IN</h5>
                </div>
                    <form action="../backend/login.php" method="post">
                        <input type="email" id="logemail" name="email" placeholder="Email"required />
                        <input type="password" name="password" placeholder="Password" id="logpass"onclick="check()"required>
                        <a href="#" onclick="recoverPassword()">forgot Password</a><br>
                        <button type="submit"name="submit" onclick="check()"> SIGN IN</button>    
                    </form>
                
            </div>
            <div id="sendotp">
                <div class="heading">
                    <h5>SIGN UP</h5>
                </div>
                    <form action="../backend/sendotp.php" method="post">
                        <input type="email" id="sendotpemail" name="email" placeholder="Email" required />
                        <button type="submit" name="submit" onclick="sendOtp()">SEND OTP</button>
                    </form>               
            </div>
            <div id="sendotpforrecoverpassword">
                <div class="heading">
                    <h5>PASSWORD RECOVER</h5><br>
                </div>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Email"required><br>
                        <button type="reset" onclick="sendotpforrecoverpassword()">SEND OTP</button>
                    </form>               
            </div>
            <div id="otpverifyforrecoverpassword">
                <div class="heading">
                    <h5>PASSWORD RECOVER</h5><br>
                </div>
                    <form action="#" method="post">
                        <input type="text" name="otp" placeholder="OTP"required ><br>
                        <button type="reset" onclick="verifyotpforpasswordrecover()">VERIFY</button>
                    </form>               
            </div>
            <div id="setpassword">
                <div class="heading">
                    <h5>PASSWORD RECOVER</h5><br>
                </div>
                    <form action="../backend/otpverify.php" method="post">
                        <input type="password" name="pass1" placeholder="SET PASSWORD" required><br>
                        <input type="password" name="pass1" placeholder="CONFIRM PASSWORD" required><br>
                        <button type="submit" onclick="verifyfgp()">SET PASSWORD</button>
                    </form>
                
            </div>
            <div id="otpverify">
                <div class="heading">
                    <h5>SIGN UP</h5><br>
                </div>
                    <form action="../backend/otpverify.php" method="post">
                        <input type="text" name="otp" id="otp" placeholder="OTP" required><br>
                        <button type="submit" onclick="verify()">VERIFY</button>
                    </form>
                
            </div>
            <div id="register">
                <div class="heading">
                    <h5>SIGN UP</h5><br>
                </div>
                    <form action="../backend/register.php" method="post" class="regform" enctype="multipart/form-data">
                        <div class="fl">
                            <input type="text" name="fname" placeholder="First Name" id="fif"required>
                            <input type="text" name="lname" placeholder="Last Name"id="fif"required><br>
                        </div>                      
                        <input type="text" name="Phone" placeholder="Phone" id="hun"required>
                        <div class="fl">
                            <input type="password" name="Pw" placeholder="Password"id="fif" class="pass1" required >
                            <input type="password" name="con-pw" placeholder="Confirm Password"id="fif"class="pass2"required ><br>
                        </div>
                        <div class="fl">
                            <input type="text" name="villst" placeholder="Village/Street Name"id="fif" required onclick="passcheck()">
                            <input type="text" name="po" placeholder="Post Office"id="fif"required><br>
                        </div>
                        <div class="fl">
                            <input type="text" name="ps" placeholder="Police Station" id="fif"required>
                            <input type="text" name="dist" placeholder="District"id="fif" required><br>
                        </div>
                        <div class="fl">
                            <input type="text" name="locality" placeholder="Locality" id="fif" required>
                            <input type="text" name="zip" placeholder="Zip Code"id="fif"required><br>
                        </div>                   
                        <button type="submit">VERIFY</button>
                    </form>              
            </div>

            <div id="admin">
                <div class="header">
                    <h5> ADMIN LOG IN</h5>
                </div>
                    <form action="../backend/adminlogin.php" method="post">
                        <input type="text" name="id" placeholder="Enter Id" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit"> SIGN IN</button>
                    </form>
                
            </div>
             </div>
        </section>
    </div>
<script>
function mySignin(){
    document.getElementById("login").style.display="block";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("admin").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="none";
    document.getElementById("otpverifyforrecoverpassword").style.display="none";
    document.getElementById("setpassword").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("register").style.display="none";
}
function mySignup(){
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="block";
    document.getElementById("admin").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="none";
    document.getElementById("otpverifyforrecoverpassword").style.display="none";
    document.getElementById("setpassword").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("register").style.display="none";
}
function myAdmin(){
    document.getElementById("admin").style.display="block";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="none";
    document.getElementById("otpverifyforrecoverpassword").style.display="none";
    document.getElementById("setpassword").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("register").style.display="none";
}
function sendOtp(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";   
    var z = document.getElementById("sendotpemail").value;
    if(z=="")
    {
        document.getElementById("otpverify").style.display="none";
        document.getElementById("sendotp").style.display="block";
    }
    else
    {
        document.getElementById("sendotp").style.display="none";
        document.getElementById("otpverify").style.display="block";
    }
}
function recoverPassword(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="block";
}
function sendotpforrecoverpassword(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="none";
    document.getElementById("otpverifyforrecoverpassword").style.display="block";
}
function verifyotpforpasswordrecover(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("sendotpforrecoverpassword").style.display="none";
    document.getElementById("otpverifyforrecoverpassword").style.display="none";
    document.getElementById("setpassword").style.display="block";
}


function verify(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("register").style.display="block";
    var y = document.getElementById("otp").value;
    if(y=="")
    {
        document.getElementById("otpverify").style.display="block";
        document.getElementById("sendotp").style.display="none";
        document.getElementById("register").style.display="none";
    }
    else
    {
        document.getElementById("sendotp").style.display="none";
        document.getElementById("otpverify").style.display="none";
        document.getElementById("register").style.display="block";
    }
}
function verifyfgp(){
    document.getElementById("admin").style.display="none";
    document.getElementById("login").style.display="none";
    document.getElementById("sendotp").style.display="none";
    document.getElementById("otpverify").style.display="none";
    document.getElementById("register").style.display="none";
}


</script>
</body>

</html>