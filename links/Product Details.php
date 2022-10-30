<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Product Details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product Details</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h5>Biddmart</h5>
        </div>
        <div class="opt">
            <ul>
                <li><a href="links/login.html"> Login | SignUp</a></li>
                <li>Cart</li>
                <li>Help</li>
            </ul>
        </div>
    </nav>

    <nav class="category">
        <div class="cto">
            <img src="../img/mobiles.jpg" alt="a mobile picture">
            <h6>Mobile</h6>
        </div>
        <div class="cttw">
            <img src="../img/mobiles.jpg" alt="a dress picture">
            <h6>Fashion</h6>
        </div>
        <div class="ctth">
            <img src="../img/mobiles.jpg" alt="a electronic picture">
            <h6>Electronic</h6>
        </div>
        <div class="ctfo">
            <img src="../img/mobiles.jpg" alt="a home picture">
            <h6>Home Appliances</h6>
        </div>
    </nav>
    <div class="container">
        <div class="left" id="left">
            <div class="productview">
                <div class="view">
                    <img src="../img/mobiles.jpg" alt="">
                </div>
                <div class="gallery">
                    <img src="../img/mobiles.jpg" alt="">
                    <img src="../img/mobiles.jpg" alt="">
                    <img src="../img/mobiles.jpg" alt="">
                    <img src="../img/mobiles.jpg" alt="">
                </div>
            </div>

        </div>



        <div class="cart_b">
            <button class="cart" onclick="checkout()">Add To Cart</button>
            <button class="buy">Buy</button>
        </div>

        <div class="right">
            <div class="content">
                <div class="name">
                    <h5>samsung s25</h5>
                </div>
                <div class="offer">
                    <h5>Offers</h5>
                    80% off
                </div>
                <div class="price">
                    <h5>Price</h5>
                    RS 1000.00
                </div>

                <div class="features">
                    <h5>Varients</h5>
                    <div class="fo">
                        8 GB + 128 GB
                    </div>
                    <div class="ft">
                        12 GB + 256 GB
                    </div>
                </div>
                <div class="highlight">
                    <h5>highlights</h5>
                    <p>
                        25 watt super fast charger<br>
                        Super amoled Display<br>
                        HDR 10+<br>
                        120 hz refresh rate<br>
                    </p>
                </div>
                <div class="warrenty">
                    <h5>Warranty</h5>
                    1 YR Product Warranty<br>
                    7 Days replacement policy<br>
                    cash on delivery available<br>
                </div>
                <div class="specification">
                    <h5>Specification</h5>
                    6.67 inch display<br>
                    lpddr5 ram<br>
                    3.1 ufs storage<br>
                    sanpdragon 888<br>
                    12 5g bands<br>
                    ip68 certified<br>
                    64mp rear camera<br>
                    50mp main camera<br>
                    12mp depth sensor<br>
                    ois camera<br>

                </div>
            </div>

        </div>
    </div>
    <footer>
        <?php
        include'../footer.php';
        ?>

    </footer>
    <div class="cpr">
        <h5>All right reserve by Bidd-mart 2022</h5>
    </div>
    <script>
        window.onscroll = function() {myFunction()};

        function myFunction()
         {
        if (document.documentElement.scrollTop > 50) 
        {
            document.getElementById("left").style.marginTop = "-160px";
            document.getElementById("left").style.transition = ".2s";
        } else
         {
            document.getElementById("left").style.marginTop = "30px";
         }
        }
        function checkout()
        {
            window.location.href = "../backend/cart.php";
        }
    </script>
</body>

</html>