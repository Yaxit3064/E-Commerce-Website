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

    <style>
            body {
               /* background-image: url("../Media/Backgrounds/SellerFormBg.png"); */
               background-repeat: no-repeat;
               background-size: cover;
               background-color:  whitesmoke;
            }    
        </style>

  <body>
    <div class="header">
        <?php
            require("../HTML/nav.php");
        ?>
    </div>

    <div class='myaccount'>
        <div class='row'>
            <div class='card' style='border:solid 1px #41419b; background-color: rgba(65,65,155,0.2);'>
                <i class="fas fa-edit " aria-hidden="true" style='color:#41419b'></i>
                <p  style='color:#41419b'>Edit Profile</p>
            </div>

            <div class='card' style='border:solid 1px #9b4141; background-color: rgba(155,65,65,0.2);'>
                <i class="fas fa-shopping-bag " aria-hidden="true" style='color:#9b4141' ></i>
                <p style='color:#9b4141'>My Orders</p>
            </div>

            <div class='card' style='border:solid 1px #929b41; background-color: rgba(146,155,65,0.2);'>
                <i class="fas fa-heart " aria-hidden="true"  style='color:#929b41'></i>
                <p style='color:#929b41'>My Wishlist</p>
            </div>
        </div>

        <div class='row'>
            <div class='card'  style='border:solid 1px #419b5c; background-color: rgba(65,155,92,0.2);'>
                <i class="fas fa-envelope" aria-hidden="true"  style='color:#419b5c'></i>
                <p style='color:#419b5c'>Inbox</p>
            </div>

            <div class='card'  style='border:solid 1px #419b9b; background-color: rgba(65,155,155,0.2)'>
                <i class="fas fa-key  " aria-hidden="true"  style='color:#419b9b'></i>
                <p style='color:#419b9b'>Change PW</p>
            </div>

            <div class='card' style='border:solid 1px #8c419b; background-color: rgba(140,65,155,0.2);'>
                <i class="fas fa-sign-out-alt" aria-hidden="true"  style='color:#8c419b'></i>
                <p style='color:#8c419b'>Log Out</p>
            </div>
        </div>
        <?php
          if($result_set['type'] == 'Seller'){
            $query = "SELECT `type` FROM users_details WHERE `email`='$_SESSION[email]'";
            $result = mysqli_query($con , $query);
            $result_set = mysqli_fetch_assoc($result);

                echo"
                <div class='row'>
                    <div class='card'  style='border:solid 1px #814d12; background-color: rgba(129, 77, 18, 0.2);margin-right:5%;'>
                        <i class='fas fa-sign-out-alt' aria-hidden='true'  style='color: #814d12'></i>
                        <p style='color:#814d12;font-size:130%'>Manage Products</p>
                    </div>
                
                    <div class='card' onclick='goTOAddPRoduct()' style='border:solid 1px #419b9b; background-color: rgba(65,155,155,0.2);margin-right:5%;'>
                    <i class='fas fa-sign-out-alt' aria-hidden='true'  style='color:#419b9b'></i>
                        <p  style='color:#419b9b;font-size:150%'>Add a Product</p>
                    </div>
                </div>
                ";
            }
        ?>
    </div>
    <script src="../JS/UI.js"></script> 
  </body>
</html>
