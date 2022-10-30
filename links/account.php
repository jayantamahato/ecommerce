<?php
    session_start();
    include'../backend/config.php';
    $user=$_SESSION['user'];
    $query ="SELECT * FROM `account` WHERE `email`='$user'";
    $run=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biddmart|Account</title>
     <style>
         @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
        *{
            padding:0px;
            margin: 0px;
            font-family: 'Nunito', sans-serif;
        }
       
        .card a{
            text-decoration: none;
            color: black;
        }       
        .content{
            margin-top:65px;
            width: 100%;                
            display: flex;
            justify-content: center;
            background: linear-gradient(to right bottom, #4ca2af93, #c4e0e58f);
        }
        .content>.left-content{
            margin-top:30px;
            background: linear-gradient(to right bottom, #fdfdfd44, #fefefe66);          
            width: 20%;
            border-radius: 20px 0px 0px 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;            
        }
        .dp{          
            height: 100px;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: white;
            margin-top: -200px;
            margin-bottom: 50px;
        }
        .details{      
            width: 100%;
            height:150px;
            text-align: center;
        }
        .details h4{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .details h5{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .details button{
            background-color: white;
            width: 70%;
            height: 30px;        
        }
        .content>.right-content{ 
            margin-top:30px;      
            width: 50%;
            border-radius: 0px 20px 20px 0px;
            background-color: white;
        }
        .right-content>.card{
           
            width: 90%;
            padding: 10px;
            margin: 5px;
        }
        .content>.right-content>.card>.heading{
           
            height: 40px;
        }
        .content>.right-content>.card>.card-body{
           border: 2px solid rgb(211, 210, 210);
           border-radius: 5px;
           margin: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content>.right-content>.card>.card-body>.view{        
            display: flex;
            align-items: center;
            width: 100%;
        }
        .right-content img{
            height: 100px;
            width: 100px;
            margin-right: 50px;
        }
        .pname{
            width: 100%;
            height: 100px;
        }
        @media screen and (max-width: 1000px){
            .content{   
                margin-top:-70px;                  
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            background: linear-gradient(to right bottom, #4ca2af93, #c4e0e58f);
        }
        .content>.left-content{
            background: linear-gradient(to right bottom, #fdfdfd44, #fefefe66);           
            width: 100%;
            height:100vh;
            border-radius: 20px 20px 0px 0px; 
            margin-top:-30px;                
        }
        .dp{         
        height: 100px;
        width: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background-color: white;
        margin-top: 10px;
        margin-bottom: 50px;
        }
      .content>.right-content{
        margin-top:-30px; 
        width: 100%;
        border-radius: 0px 0px 20px 20px;
        background-color: white;  
        }
        .content>.right-content>.card{
            width:100%;
        }
    .details button{
        background-color: white;
        width: 70%;
        height: 30px;
        border:1px solid black;         
        }
    }
    </style>
</head>
<body>
    <div class="navigation">
    <?php
    include'../nav/nav.php';
    ?>
    </div> 

   <div class="content">
        <div class="left-content">
            <div class="dp">
                <h3>
                <?php
                    $logo= $fetch["fname"];
                    echo $logo[0];
                ?>
                </h3>
           
            </div>
            <div class="details">
                <h4>
                    <?php
                    echo $fetch["fname"]."  ".$fetch["lname"];
                    ?>                  
                </h4>
                <h5>
                <?php
                    echo $fetch["phone"]."\n";
                    echo $fetch["email"];
                    ?> 
                </h5>
                <div class="logout">
                    <a href="../backend/logout.php"><button>Logout</button></a>
                </div>
            </div>
        </div>
        <div class="right-content">
            <div class="card">
                <div class="heading">
                    <h3>Order Details</h3>
                </div>
                <div class="card-body">
                    <div class="view">
                        <a href="../links/Product Details.php"><img src="../img/mobiles.jpg" alt="order item image"></a>
                        <a href="../links/Product Details.php" class="pname"><h4>product name </h4></a>
                        
                    </div>
                </div>
                <div class="card-body">
                    <div class="view">
                        <a href="../links/Product Details.php"><img src="../img/mobiles.jpg" alt="order item image"></a>
                        <a href="../links/Product Details.php" class="pname"><h4>product name </h4></a>
                        
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="heading">
                    <h3>Your Cart</h3>
                </div>
                <div class="card-body">
                    <div class="view">
                        <a href="../links/Product Details.php"><img src="../img/mobiles.jpg" alt="order item image"></a>
                        <a href="../links/Product Details.php" class="pname"><h4>product name </h4></a>
                        
                    </div>
                </div>
                <div class="card-body">
                    <div class="view">
                        <a href="../links/Product Details.php"><img src="../img/mobiles.jpg" alt="order item image"></a>
                        <a href="../links/Product Details.php" class="pname"><h4>product name </h4></a>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>