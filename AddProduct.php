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

        <style>
            body {
               background-image: url("../Media/Backgrounds/AddProduct.png");
               background-repeat: no-repeat;
               background-size: cover;
            }    
        </style>
    </head>

        <body>

        <?php
            require('../HTML/nav.php');
        ?>

         <div class='addProduct'>
             <form action='../PHP/uploadProduct.php'  enctype='multipart/form-data' method='post'> 
                <img src='../Media/Logo/logo10.png' \>

                 <div class="categorydetails">
                     <select class="form-control" name='category' id="inputCategory" required>
                        <option value="">--Select Category--</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Tech">Tech</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Grocery">Grocery</option>
                        <option value="Cars & Accessories">Cars & Accessories</option>
                      </select>

                      <div class="form-group col-md-4">
                          <select class="form-control"name='subcategory' id="inputSubCategory" required>
                             <option value="">--Select SubCategory-- </option>
                          </select>                
                      </div>
                 </div>
       
                 <div class='productname'>
                    <input type='text' name='productName' placeholder='Product Name'required>
                 </div>

                 <div class="price">
                     <input type="number" name='productprice' placeholder="Price" \>  
                 </div> <br><br>

                 <div class="description">
                     <input type="text" name='description' placeholder="Description" \>  
                 </div> <br><br>

                 <p>Upload Photos(First photo will be the main photo):</p><br>
                 <div class="photos">
                     <input type="file" name='photo1' \>
                     <input type="file" name='photo2' \>
                     <input type="file" name='photo3' \>
                     <input type="file" name='photo4' \>
                     <input type="file" name='photo5' \>
                 </div>
                <div class='submit'>
                    <input type='submit' name ='submit' value='Submit' \>
                </div>
             </form>
         </div>
    </body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="../JS/AddProduct.js"></script>
<script src="../JS/UI.js"></script> 

</html>

