<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biddmart Admin</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        a{
            text-decoration: none;
            color: black;
            margin: 10px;
        }
        nav{
            background-color: lightblue;
            color: black;
            text-transform: capitalize;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            list-style-type: none;
            padding: 5px;
            display: flex;
            justify-content: space-between;
        }
        nav>.logo{
            margin: 10px;
        }
        nav >.option ul{
            display: flex;
            padding: 10px;
            list-style-type: none;
        }
        .content{
          
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content button{
            height: 50px;
            width: 120px;
            text-transform: capitalize;
        }
        .content button:hover{
            background-color: lightblue;
            border:none;
        }
        .logout{
            background-color:red;
            border:none
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $passvalue="xyz";
    $passvalue=$_SESSION['pass'];
    if($passvalue != "passed")
    {
       header("location:login.html");
    }
    ?>
    <nav>
        <div class="logo">
            <h4>biddmart</h4>
        </div>
        <div class="option">
            <ul>
                <li> <a href="../index.php"> Home</a></li>
                <li> <a href="../backend/logout.php"> Log out</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <a href="#"><button>User Maintain</button></a>
        <a href="insert_item.php"><button>Item Insert</button></a>
        <a href="updateitem.php"><button>Item Update</button></a>
        <a href="#"><button>Item Delete</button></a>
        <a href="../backend/logout.php"><button  class="logout">Log Out</button></a>
    </div>
    
</body>
</html>