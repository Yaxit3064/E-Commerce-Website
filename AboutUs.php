<html lang="en">
<?php  
    session_start(); 
    require("../PHP/connection.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../CSS/AboutUs.css">
    <link rel="stylesheet" href="../CSS/UI.css">
    <link href="../Media/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <?php
        require('../HTML/nav.php    ');
        ?>
        </div>   

    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Welcome to U Shop, You are most welcome to our website as a Seller or a user. In our website you can sell product as a Seller or you can buy products as a user. We provides best service as possible. We now serve users all over India. We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
            </p>
            <div class="slogan">
                <span>U shop - it's all about You</span>
            </div>
        </div>
    </div>
    <script src="../JS/UI.js"></script> 
</body>
</html>