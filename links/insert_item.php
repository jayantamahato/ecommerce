<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | insert item</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            text-transform: uppercase;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dealodtheday{
            margin: auto;
        }
        h5 {
            text-align: center;
            text-transform: uppercase;
        }
        form {
            width: 80%;
            margin: auto;
            margin-top: 10px;
            box-shadow: 1px 1px 9px black;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        input {
            width: 40%;
            margin-bottom: 10px;
            height: 30px;
            border: 1px solid black;
            text-transform: capitalize;
        }
        button {
            width: 100px;
            height: 45px;
            background-color: black;
            color: white;
            border: none;
        }
        select {
            margin: 20px;
            width: 20%;
           
        }
        .fif{
            display: flex;
            justify-content: center; 
        }
        .fif input{
            width: 30%;
            padding: 5px; 
            margin: 5px; 
        
        }
        .hun input{
            width: 30%;
            padding: 5px;
        }
        .curd{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .curd button{
            margin: 5px;
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
    if($passvalue !== "passed")
    {
       header("location:login.html");
    }
    ?>
    <div class="dealoftheday">
        <form action="../backend/insertitem.php" method="post" enctype="multipart/form-data">
            <label for="table">Choose a table name:</label>
            <select id="table" name="table">
                <option value="dealoftheday">Deal Of The Day</option>
                <option value="mobiles">mobiles</option>
                <option value="homeappliances">Home Appliances</option>
                <option value="electronics">Electronics</option>
                <option value="footwear">Footweare</option>
                <option value="fashion">Fashion</option>
            </select>
            main pic:<input type="file" name="mainpic" style="width: 20%;">
            pic1:<input type="file" name="pic1" style="width: 20%;">
            pic2:<input type="file" name="pic2" style="width: 20%;">
            pic3:<input type="file" name="pic3" style="width: 20%;">
            pic4:<input type="file" name="pic4" style="width: 20%;">
            <div class="fif">
                <input type="text" name="brand" placeholder="brand">
                <input type="text" name="descname" placeholder="name">
            </div>
            <div class="fif">
                <input type="text" name="varient" placeholder="varient1,varient2,...">
                <input type="text" name="price" placeholder="price1,price2,.."><br>
            </div>
            <div class="fif">
                <input type="text" name="warranty" placeholder="warranty in year ex.1">
                <input type="text" name="offer" placeholder="offer ex.80% off"><br>
            </div>
            <div class="fif">
                <input type="text" name="spec" placeholder="specification,specification,...">
                <input type="text" name="highlights" placeholder="highlights,highlights,...">
            </div>
            <div class="curd">
                <button type="submit"> submit</button><br>
                <a href="updateitem.PHP"><button type="button">Update</button><br></a>
                <a href="deleteitem.html"><button type="button"> Delete</button><br></a>
                <a href="../backend/logout.php"><button  class="logout">Log Out</button></a>
            </div>
            
            
        </form>
    </div>
</body>

</html>