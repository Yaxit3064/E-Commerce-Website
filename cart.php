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
            require('../HTML/nav.php');
        ?>

<!-- ------------------------cart item-details------------------------ -->

<div class="cart-table-container">
    <table>
        <tr>
            <th>image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
        </tr>
        <tr>
            <td><img src="../Media/Products/1.png"></td>
            <td>
                <div>
                    <p>Puma Women's' Regular T-Shirt</p>
                    <a href=""></a>
                </div>
            </td>
            <td><input type='number' value='1'></td>
            <td>$11.00</td>
            <td><i class='fa fa-trash'>&nbspRemove</i></td>
        </tr>

        <tr>
            <td><img src="../Media/Products/81.png"></td>
            <td>
                <div>
                    <p>Koverify Black Hoodie / Hoodie for Men Women / Warm Hoodie/Unisex Hoodie</p>
                    <a href=""></a>
                </div>
            </td>
            <td><input type='number' value='1'></td>
            <td>$6.00</td>
            <td><i class='fa fa-trash'>&nbspRemove</i></td>
        </tr>

        <tr>
            <td>  <img src="../Media/Products/test1.jpg"></td>
            <td>
                <div>
                    <p>Vega Crux Black Helmet-</p>
                    <a href=""></a>
                </div>
            </td>
            <td><input type='number' value='1'></td>
            <td>$15.00</td>
            <td><i class='fa fa-trash'>&nbspRemove</i></td>
        </tr>
    </table>


    <div class='total-table'>
        <table>
            <tr>
                <td>Extra Tax</td>
                <td>$2</td>
            </tr>
            <tr>
                <td>Discount</td>
                <td>$5</td>
            </tr>
            <tr>
                <td>Final Price</td>
                <td>$29 </td>
            </tr>
        </table>
    </div><br>

    <div class='cart-submit'>
        <p>Continue</p>
    </div>
</div>

    </div>
    <script src="../JS/UI.js"></script> 
  </body>

</html>
