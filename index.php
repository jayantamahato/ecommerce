<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Welcome to Biddmart</title>
</head>

<body>
    <div class="navigation">
    <?php
    include'nav/nav.php';
    ?>
    <div class="catagory-navbar">
    <?php
   include'catagorynav.php';
   ?>
    </div>
   
    <div class="banner">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/bidd-mart.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/bidd-mart2.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="img/bidd-mart3.jpg" class="d-block w-100" alt="...">

                </div>
            </div>
            
        </div>
    </div>


    <div class="deal_of_the_day">
        <?php
        include'backend/config.php';
        $query="SELECT * FROM `dealoftheday`";
        $run=mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0)
       {
        ?>
        <div class="header">
            <div class="left">
                <h5>Deal of the Day</h5>
            </div>
            <div class="right">
                <a href="links/dealoftheday.php"><h5>Show all</h5></a>
            </div>
        </div>


        <div class="content">
            <?php
                for($id=0;$id<6;$id++)
                {
                    $fetch=mysqli_fetch_assoc($run);              
            ?>
            <div class="item">
                <div class="itemview">
                    <a href="links/Product Details.php?item=<?php echo $fetch['itemid'];?>"> <img src="<?php echo $fetch['mainpic'];?>" alt=""></a>
                </div>
                <div class="item_details">
                    <h3><?php echo $fetch['name'];?></h3>
                    <h4><?php echo $fetch['price'];?></h4>
                </div>
            </div>
            <?php            
             }
            ?>     
        </div>
        <?php
        }
        ?>
    </div>


<div class="deal_of_the_day">
    <div class="header">
        <div class="left">
            <h5>Top Deals on Fashion</h5>
        </div>
        <div class="right">

           <a href="links/topdealonfashion.php"><h5>Show all</h5></a>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>="">
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>

            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
    </div>
</div>


</div>
<div class="deal_of_the_day">
    <div class="header">
        <div class="left">
            <h5>Men's Footwear</h5>
        </div>
        <div class="right">
            <a href="links/Men's Footwear.php"><h5>Show all</h5></a>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>

            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
    </div>
</div>


</div>
<div class="deal_of_the_day">
    <div class="header">
        <div class="left">
            <h5>Top Deals on Shoes</h5>
        </div>
        <div class="right">
            <a href="links/Top Deal On Shoes.php"><h5>Show all</h5></a>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>

            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
    </div>
</div>


</div>
<div class="deal_of_the_day">
    <div class="header">
        <div class="left">
            <h5>Home Appliances</h5>
        </div>
        <div class="right">
            <a href="links/Home Appliances.php"><h5>Show all</h5></a>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>

            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
    </div>
</div>


</div>
<div class="deal_of_the_day">
    <div class="header">
        <div class="left">
            <h5>Eloctronics</h5>
        </div>
        <div class="right">
            <a href="links/Electronics.php"><h5>Show all</h5></a>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>

            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
        <div class="item">
            <div class="itemview">
                <a href="links/Product Details.php"><img src="img/mobiles.jpg" alt=""></a>
            </div>
            <div class="item_details">
                <h3>name</h3>
                <h4>price</h4>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php
    include'footer.php';
    ?>
    
</footer>
<div class="cpr">
    <h5>All right reserve by Bidd-mart 2022</h5>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>