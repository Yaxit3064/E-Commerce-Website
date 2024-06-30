<!DOCTYPE html>

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

    <?php
        require("../HTML/nav.php");
    ?>
   
  <script src="../JS/UI.js"></script> 
    
      <div class="products-heading">
         <div class="row-2">
             <h2>All Products</h2>
             <select>
                 <option>Default Shorting</option>
                 <option>Short by price</option>
                 <option>Short by popularity</option>
                 <option>Short by rating</option>
                 <option>Short by sales</option>
             </select>
         </div>                                            
     </div>                  

      <div class="products">    

            <?php 

               $query = "SELECT * FROM product_details";
               $result = mysqli_query($con , $query);
               $total_products = mysqli_num_rows($result);
               
 
               $i = 1;
                while($i<=4){
                    echo"
                        <div class='row'>
                    ";
                    $j = 1;
                      while($j<=5){
                        $result_fetch = mysqli_fetch_assoc($result);    
                      
                        if($result_fetch == null){
                            echo"
                            <div class='col'>
                                <p></p>
                                <div class='rating'></div>
                                <p></p>
                             </div>             
                            ";
                            $j++;
                        }
                        else{
                        echo"
                            <a href ='../HTML/ProductDetails.php?id=$result_fetch[product_id]'><div class='col'>
                                <img src='../Media/Products/$result_fetch[photo]'>";
                                $product_name_length = strlen($result_fetch['product_name']);
                                $product_name_short = substr($result_fetch['product_name'] , 0 ,50);
                                if($product_name_length >= 50){
                                    echo"
                                         <p>$product_name_short ...</p>
                                    ";
                                }
                                else{
                                    echo "
                                        <p>$result_fetch[product_name]</p>
                                       ";
                                }
                                echo "
                               
                                <div class='rating'>";
                                    $k = 1;
                                    while($k<=$result_fetch['rating']){
                                        echo "
                                            <i class='fa fa-star'></i>";
                                        $k++;
                                    }
                                    $k--;
                                    if($result_fetch['rating'] >= ($k+0.5)){
                                         echo "  <i class='fa fa-star-half'></i>";
                                    }
                                    echo "&nbsp($result_fetch[rating])";
                                     echo "
                                </div><br>
                                <div class='price-buynow'>
                                    <h5>$$result_fetch[price]</h5>
                                    <a href='../HTML/ProductDetails.php?id=$result_fetch[product_id]'><input type='button' value='Buy Now'></a>
                                </div></a>                    
                             </div>             
                            ";
                            $j++;
                        }
                    }

                      echo"
                        </div> 
                      "; 
                      $i++;
                    }
            
                ?>
         
        <div class="page-btn">
            <span >1</span>
            <?php
             if($total_products > 20){
                echo "
                    <a href='Products2.php'><span>2</span></a>
                ";
            }
            else{
                echo "
                    <span>2</span>
                ";
            }
            ?>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
        </div>
      </div>
                 
    
               <!-- ------------------------------footer-------------------------------- -->

 <div class="footer">
     <div class="container">
         <div class="row">
             <div class="footer-col-1">
              <div class="footer-heading">
                  <h3>PRIVACY INFO</h3>
              </div>
                 <br>
                 <a href="">Privacy Policy</a><br>
                 <a hreaf="">Terms of Sale</a><br>
                 <a href="">Terms of Use</a><br>
                 <a href="">Report Abuse & Takedown Policy</a>
             </div>

             <div class="footer-col-2">
               <div class="footer-heading">
                  <h3>SOCIAL MEDIA</h3>
               </div>
              <br>
              <a href="">Facebook</a><br>
              <a hreaf="">Instagram</a><br>
              <a href="">Twitter</a><br>
          </div>

          <div class="footer-col-3">
              <div class="footer-heading">
                  <h3>NEED HELP?</h3>
              </div>
              <br>
              <a href="">FAQ</a><br>
              <a hreaf="">Contact Us</a><br>
          </div>

          <div class="footer-col-4">
              <div class="footer-heading">
                  <h3>SUBSCRIBE</h3>
              </div>
              <br>
              <input type="email"class="input"placeholder="Your Email Address">
              <button type="button"SUBSCRIBE>SUBSCRIBE</button>
              <p>Register now to get a chance to play lucky spin <br>and win special discount</p>
          </div>
         </div>
     </div>
 </div>

<!-- -----------------<br>
----------------- -->
<script src="../JS/UI.js"></script> 
</body>
</html>

