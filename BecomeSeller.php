<?php  
    session_start(); 
    require("../PHP/connection.php");
?>
<html>
    <head>
        <title> Become a seller</title>
        <link rel="stylesheet" href="../CSS/UI.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="../Media/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    </head>

        <body>
        <?php
            require('../HTML/nav.php');
        ?>

        <div class='templates'>
            <div class="template-seller">
                <div class="text">   
                          <h1>Start Selling,<br></h1>                             
                       <h1> on <span style="color:green">U SHOP.</span><br></h1>        
                       <br>     
                    <p>Start your journey as a seller on<br>
                        U SHOP and grow your business.<br><br></p>
                    <a href="../HTML/BecomeSellerForm.php"id="btn4">Start Selling</a>
                </div
                <div class="photo">
                    <img src="../Media/Template/StartSelling.png" width="30%"  height="50%">                   
                </div>
            </div>
        </div>
            <script src="../JS/UI.js"></script> 
        </body>
    </html>