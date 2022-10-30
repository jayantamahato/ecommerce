<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
        .catagory_nav{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-top:70px;
            
        }
        .catagory_nav>.catagory_item img{
            height: 90px;
            width: 120px;
            margin-bottom: 5px;
        }
        .catagory_nav>.catagory_item{
            text-align: center;
        }
        @media screen and (max-width: 1000px) {
            .catagory_nav{           
            position: relative;     
          margin-top:5px;      
        }
            .catagory_nav>.catagory_item img{
            display: none;
        }
        .catagory_nav>.catagory_item h6{
            font-size: 12px;
        }
        }
    </style>
</head>
<body>
    <div class="catagory_nav">
        <div class="catagory_item">
            <a href="links/categoryproduct.html"><img src="img/catagory_navbar/mobiles.png" alt="a mobile picture"></a>
            <h6>Mobile Phones</h6>
        </div>
        <div class="catagory_item">
            <a href="links/categoryproduct.html"><img src="img/catagory_navbar/fashion.webp" alt="a mobile picture"></a>
            <h6>Fashion</h6>
        </div>
        <div class="catagory_item">
            <a href="links/categoryproduct.html"><img src="img/catagory_navbar/homeappliances.jpeg" alt="a mobile picture"></a>
            <h6>Home appliances</h6>
        </div>
        <div class="catagory_item">
            <a href="links/categoryproduct.html"><img src="img/catagory_navbar/electronics.png" alt="a mobile picture"></a>
            <h6>Electronics</h6>
        </div>
    </div>
</body>
</html>