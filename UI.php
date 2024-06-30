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
    <div class="header">
       <?php
            require("../HTML/nav.php");
       ?>

                               <!-- ------templates-------- -->


        <div class="templates">
            <div class="template-1">
                <div class="text">   
                          <h1>Buy More,<br></h1>                             
                       <h1>Save More.<br></h1>        
                       <br>     
                    <p>We provide best products by best sellers<br>
                        at very reasonable and satisfactory price.<br><br></p>
                    <a href=""class="btn1">Explore Now</a>
                </div>
              
                <div class="photo">
                    <img src="../Media/Template/Template1.png">                   
                </div>
            </div>

            <div class="template-2">
                <div class="text">   
                          <h1>Buy More,<br></h1>                             
                       <h1>Save More.<br></h1>  
                       <br>           
                    <p>We provide best products by best sellers<br>
                        at very reasonable and satisfactory price.<br><br></p>
                    <a href=""id="btn1">Explore Now</a>
                </div>
              
                <div class="photo">
                    <img src="../Media/Template/Template1.png">                   
                </div>
            </div>
          
            <div class="template-3">
                <div class="text">   
                          <h1>30% Discount on <br></h1>                             
                       <h1>Galaxy Watch 4<br></h1>             
                       <br>
                    <p>Buy Samsung's latest Galaxy Watch 4 with<br>
                       One UI experience and enjoy 30% off.<br><br></p>
                    <a href=""id="btn2">Buy Now</a>
                </div>

                <div class="photo">
                    <img src="../Media/Template//Template2.png">                   
                </div>
            </div>
           
            <div class="template-4">
                <div class="text">   
                          <h1>Spin wheel,<br></h1>                             
                       <h1>Win Deal!<br></h1>             
                       <br>
                    <p>Try your luck!  spin Lucky Wheel once a week<br>
                     and have a chance to get heavy discount.<br><br></p>
                    <a href="../HTML/LuckySpin.html"id="btn3">Spin Now</a>
                </div>
              
                <div class="photo">
                    <img src="../Media/Template/Template3.png">                   
                </div>
            </div>>
        </div> 
     </div>   
    
                                                 <!--------------- category section ---------------->
 
   <div class="margin-top"></div>    

      <div class="heading">
         <h>What are you interested in today?</h>                                            
     </div>                  

    <div class="catagories">    
        <div class="row">
            <div class=col>
                <img src="../Media/Photos/photo10.png">
                <h3>Men</h3>
            </div>
            <div class=col>
                <img src="../Media/Photos/photo5.png">
                <h3>Women</h3>
            </div>
            <div class=col>
                <img src="..\Media\Photos\photo11.png">   
                <h3>Children</h3>       
            </div>
            <div class=col>
                <img src="../Media/Photos/photo12.png">  
                <h3>Tech</h3>       
            </div>
            <div class=col>
                <img src="../Media/Photos/photo13.png">       
                <h3>Grocery</h3>        
            </div>
         </div>   
       </div>
       


                                                 <!------------------ Featured Products -------------------->

   
   <div class="heading">
      <h>Featured Products</h>                                            
  </div>            
                              
  <div class="featured-products">    
    <div class="row-2">
        <div class="col-2">
           <a href="../HTML/ProductDetails.php"><img src="../Media/Products/1.png"></a>
            <p><br>Puma Women's' Regular T-Shirt</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>$11.0</p>
        </div>
        <div class="col-2">
            <img src="../Media/Products/6.png">
            <p><br>Scott International Men's Basic Cotton<br> Round Neck T-Shirts - Pack of 3</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>$5.90</p>
        </div>
        <div class="col-2">
            <img src="../Media/Products/11.jpg">
            <p><br>XTEP Women's Breathable Upper<br> Classic Skateboarding Shoes</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>            
            </div>
            <p>$53.80</p>   
        </div>   
    </div>
</div>        
                                     <!------------------ Trending Products -------------------->



  <div class="heading">
    <h>Trending products</h>                                            
</div>   

  <div class="trending-products">    
    <div class="row-2">
        <div class="col-2">
           <img src="../Media/Products/16.png">
            <p><br>Martucci 15.6 inch 30 L Casual Waterproof school/college bag<br>
            </p>
            <div class="rating">
                <i class="fa fa-star""></i>
                <i class="fa fa-star""></i>
                <i class="fa fa-star""></i>
                <i class="fa fa-star""></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>$50.0</p>
        </div>

        <div class="col-2">
          <img src="../Media/Products/36.png">
          <p><br>NIVEA Body Lotion for Very Dry Skin, Nourishing  body milk,400<br> 
          ml</p>
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
          <p>$15.0</p>   
      </div>  

        <div class="col-2">
            <img src="../Media/Products/26.png">
            <p><br>Total Fashion Trending Black Metal Flower Stud for
                 and girls<br></p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>$10.75</p>
        </div>
    </div>
</div>

                                                  <!-- -----------------------Hot new release--------------------------------- -->

  <div class="heading">
    <h>Hot new release</h>                                            
</div>   

  <div class="latest-products">    
    <div class="row-2">
        <div class="col-2">
           <img src="../Media/Products/51.png">
            <p><br>Parker Beta Millennium Gold Trim Ball Pen<br>
            + Parker 192 Pages Black Notebook Gift Set</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>$5.50</p>
        </div>

        <div class="col-2">
          <img src="../Media/Products/56.png">
          <p><br>Nourishin OnePlus Nord 2 5G (Blue Haze, 8GB RAM, 128GB Storage)<br> 
            Body Milk with Almond Oil & Vitamin E,400 ml</p>
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
          </div>
          <p>$396.0</p>   
      </div>  

        <div class="col-2">
            <img src="../Media/Products/61.png">
            <p><br>WWF India - 2022 Wall Calendar - Himalayan Splendour |<br>
                with monthly PlannerTotal Fashion Trending Black Metal Oxidised<br></p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star""></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>$4.95</p>
        </div>
    </div>
</div>

<br><br></br><br>
    
                      <!-- -----------------------------posters--------------------------------- -->
<a href='../HTML/ProductDetails.php?id=18'>
  <div class="poster"> 
     <img src="../Media/Photos/sale3.jpg">
  </div>
</a>

  <br>
  <br>

  <a href='../HTML/ProductDetails.php?id=19'>
  <div class="poster"> 
    <img src="../Media/Photos/sale4.jpg">
  </div>
  </a>


                     <!-- ----------------------------------testimonial---------------------------------  -->

<div class="heading">
    <h>What They Say About Us?</h>
</div>

  <div class="testimonial">
        <div class="row-3">
              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                  <p><br>works like a charm.i love the ease<br>
                      of the website and would hightly<br>
                      recommend purchasing their<br> 
                      monthly program to create a<br> 
                      perfect selling opportunity for<br> 
                      yourself. </p>
                      <br>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div><br>
                <img src="../Media/Photos/user1.png">
                <h3>Bill C. Gatti</h3>
              </div>

              <div class="col-3">
                <i class="fa fa-quote-left" "></i>
                  <p><br>i didn't even know where to start<br>
                      as far as advertising goes or how<br>
                      to reach people. U SHOP really<br> 
                      madde this part so easy and<br>
                      effective,<br>Thank You.<br> 
                      <!-- yourself. </p> -->
                      <br>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div><br>
                <img src="../Media/Photos/user2.png">
                <h3>Sarah Collier</h3>
              </div>

              <div class="col-3">
                <i class="fa fa-quote-left"></i>
                  <p><br>U SHOP is one of these tools that<br>
                      every entreprenuer should be<br>
                      using.with this easy to use<br> 
                      e-commerce solution,entreprenuer save time<br> 
                      and money,so they can focus on other<br> 
                      aspects of their business.</p>
                      <br>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div><br>
                <img src="../Media/Photos/user3.png">
                <h3>Jason S. Hanlon</h3>
              </div>
        </div>
     </div>
  </div> 


               <!-- ------------------------------footer-------------------------------- -->

 <div class="footer">
     <div class="container">
         <div class="row-4">
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

