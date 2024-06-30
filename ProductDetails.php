<?php  
    session_start(); 
    require("../PHP/connection.php");
?>

<html>
    <head>
        <title>U shop</title>
        <link rel="stylesheet" href="../CSS/UI.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="../Media/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    </head>

  <body>
    <div class="header">
        <?php
            require("../HTML/nav.php");
        ?>
    </div>
<!-- -------------nav ends------------- -->

    <div class="product-details">

    <?php

        $id = $_GET['id'];
        $query = "SELECT * FROM product_details WHERE `product_id`='$id'";
        $result = mysqli_query($con , $query);
        $result_set = mysqli_fetch_assoc($result);

        $query2 = "SELECT * FROM product_photos WHERE `product_id`='$id'";
        $result2 = mysqli_query($con , $query2);
        echo"
        <div class='row-2'>
            <div class='col-2' id='no_transition'>
                <img src='../Media/Products/$result_set[photo]' id='mainImg'><br><br><br>
                <div class='small-photos'>
                ";
                while($row = $result2->fetch_assoc()){
                echo"
                    <img src='../Media/Products/$row[photo_name]' class='smallImg'>
                    ";
                }
                echo"
                </div>
            </div>
            <div class='col-2' id='no_transition'>
                <h1>$result_set[product_name]</h1><br>
                <h4>$$result_set[price]</h4><br>
                ";

                if($result_set['category_name'] == 'Clothing'){
                echo"
                <select>
                    <option>Select Size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>";
                }
                echo"
                <input type='number' name='quantity' value='1'><br><br>
                <a href='../HTML/cart.php' class='btn'><Button>Add to cart</Button></a>
                <a href='' class='btn'><Button id='wishlist'>Add to wishlist</Button></a><br><br>
                <h3>Product Details:</h3><br>
            <p>PRODUCT STORY Smarten up your street style look in this button-down polo from the PUMA Essentials collection, with a natty five-button placket and an embroidered PUMA No. 1 Logo at the chest, made with premium BCI cotton. FEATURES & BENEFITS BCI: By buying cotton products from PUMA.
            </p><br>
                <h3>Other Details:</h3><br>
            <div class='no-break'>
                <div class='child'><h4>Available since:</h4></div>
                <div class='child'><p> 1 February 2021</p></div>
            </div>
            <div class='no-break'>
                <div class='child'><h4>Weight:</h4></div>
                <div class='child'><p>200 g</p></div>
            </div>
            <div class='no-break'>
                <div class='child'><h4>Manufacturer:</h4></div>
                <div class='child'><p>Puma Sports India Pvt Ltd</p></div>
            </div>
            <div class='no-break'>
                <div class='child'><h4>User Ratings:</h4></div>
                <div class='child'>
                  <div class='rating'>
                  <i class='fa fa-star'></i>
                  <i class='fa fa-star'></i>
                  <i class='fa fa-star'></i>
                  <i class='fa fa-star'></i>
                  <i class='fa fa-star-half'></i>
            </div>
                </div>
            </div>
           
        </div>
    </div>
";
?>

                                <!-- --------------related products---------------- -->

                   
<div class="heading">
    <h>Related Products</h>
</div>

<div class="related-products">
            <div class="row">
             <div class="col-1" id='no_transition'>
                <img src="../Media/Products/91.png">
             </div>
 
             <div class="col-1" id='no_transition'>
                 <img src="../Media/Products/81.png">
              </div>
 
              <div class="col-1" id='no_transition'>
                 <img src="../Media/Products/101.png">     
              </div>

              <div class="col-1" id='no_transition'>
                <img src="../Media/Products/71.png">
             </div>

             <div class="col-1" id='no_transition'>
                <img src="../Media/Products/96.png">
             </div>
        </div>
    </div>


    <script>
        var MainPhoto = document.getElementById("mainImg");
        var SmallImages = document.getElementsByClassName("smallImg");

        SmallImages(0).onClick = function(){
        MainPhoto.src = SmallImages[0].src;
        }
        SmallImages(1).onClick = function(){
        MainPhoto.src = SmallImages[1].src;
        }
        SmallImages(2).onClick = function(){
        MainPhoto.src = SmallImages[2].src;
        }
        SmallImages(3).onClick = function(){
        MainPhoto.src = SmallImages[3].src;
        }

    </script>

<script src="../JS/UI.js"></script> 
  </body>
</html>