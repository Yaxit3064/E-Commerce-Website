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

            $a = 1;
            while($a <= 20){
                $result_fetch = mysqli_fetch_assoc($result);
                $a++;  
            }
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
                                 <a href='../HTML/ProductDetails.php?id=$result_fetch[product_id]'><div class='col'>
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
                                         <a href='../HTML/ProductDetails.php?id=$result_fetch[product_id]' class='btn'><input type='button' value='Buy Now'></a>
                                     </div>
                                  </div>   </a>          
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

      
             <a href='Products.php'><span>1</span></a>
            <a href='Products.php'><span>2</span></a>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
        </div>
      </div>
      <script src="../JS/UI.js"></script> 
  </body>
</html>