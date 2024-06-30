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
               background-image: url("../Media/Backgrounds/SellerFormBg.png");
               background-repeat: no-repeat;
               background-size: cover;
            }    
        </style>
    </head>

        <body>
        <?php
            require('../HTML/nav.php');
        ?>

         <div class='becomeSellerForm'>
             <form method='post' action='../HTML/otpform.php' method='post'> 
                <img src='../Media/Logo/logo10.png' \>
                
                 <div class='heading'>
                    <p id='head2'>Business Details</p>
                 </div>

                 <div class="businessdetails">
                     <input type="text" name="business-name" placeholder="Business Name" id='busname' required>
                     <input type="text" name="phone-no" placeholder="Mobile No." id='phone-no' required>
                 </div>
                 <div class='heading'>
                    <p id='head2'>Address Details</p>
                 </div><br>
                 <div class="addressdetails">
                     <select class="form-control" name='state' id="inputState" required>
                        <option value="">--Select State--</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>

                      <div class="form-group col-md-4">
                          <select class="form-control"name='district' id="inputDistrict" required>
                             <option value="">--Select District-- </option>
                          </select>                
                      </div>
                 </div>
               <div class='addressdetails'>
                  <input text='text' name='city' placeholder='Enter city' required>   
                  <input text='text' name='pincode' placeholder='Enter pincode' required>
                </div><br><br>

                <input type='text' name='address' placeholder='Address...' id='address'required><br><br>

                <div class='submit'>
                    <input type='submit' name ='submit' value='Submit' \>
                </div>
             </form>
         </div>
         <script src="../JS/UI.js"></script> 
    </body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="../JS/BecomeSellerForm.js"></script>
<script src="../JS/UI.js"></script> 

</html>



    