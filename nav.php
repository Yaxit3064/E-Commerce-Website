<div class="navbar">        
            <div class="logo">
                <img src="../Media/Logo/logo6.png">
            </div>
            <!-- <div class="space"></div> -->
            <div class="options">
                <div class="option-n"><a href="../HTML/UI.php">Home</a></div>
                <div class="option-n"><a href="../HTML/Products.php">Products</a></div>
                <div class="option-n"><a href="../HTML/AboutUs.php">About us</a></div>
                <div class="option-n"><a href="">Contact us</a></div>
                <div class="option-n"><a href="../HTML/MyAccount.php">Account</a></div>
            </div>

            <div class="search">
                <input type="search"  name="search" placeholder="Search products...">
            </div>

            <div class="icons">                               
                <div class="carticon">
                    <a href=""><img src="../Media/Icons/Cart.png"></a>               
                </div>
                <div class="spinicon">
                    <?php
                    if(isset($_SESSION['logged_in'])){
                    echo"
                        <a href='../HTML/LuckySpin.php'><img src='../Media/Icons/Spin.png'></a>
                        ";
                    }
                    else{
                        echo "
                         <a href='' onclick ='loginFirst()'><img src='../Media/Icons/Spin.png'></a>
                        
                        ";
                    }
                    ?>

                </div>   
          
                <?php
                if(isset($_SESSION['logged_in'])){
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $query = "SELECT * FROM users_details WHERE `email` = '$email'";
                        $result = mysqli_query($con,$query);
                        $result_set = mysqli_fetch_assoc($result);
                        echo "     
                        <div class='checkbox-container'>
                            <input type = 'checkbox' id='userIconPopupCb'>
                        </div>
                            <div class='loginicon' onclick = 'userIconPopup()'>
                            <label for='userIconPopupCb'>
                                <img src='../Media/Users/$result_set[photo]'>
                            </label>
                            </div>

                            <div class = 'form-container'>
                            <div class = 'userIconPopupContainer'>  
                                <form id ='userIconPopupForm'>   
                                    <label for='userIconPopupCb'><i class='fas fa-times'></i></label>
                                       <div class='detail-container'>
                                            <img src='../Media/Users/$result_set[photo]'>
                                            <div class='username'>
                                               <h2>$result_set[user_fname]</h2>
                                               <h2 id='less-margin'>$result_set[user_lname]</h2>
                                           </div><br><br>
                                           <h5>My Account</h5>
                                       </div>
                                       <div class='underDetailContainer'>";
                                       if($result_set['type'] == 'Customer'){
                                        echo "
                                           <a href='../HTML/BecomeSeller.php'><h5>Beceome a Seller</h5></a>";
                                       }
                                        else if($result_set['type'] == 'Seller'){
                                         echo "
                                         <h5>My Products</h5>";
                                        }
                                        else{
                                         echo"
                                         <a href='../HTML/AdminPanelDashboard.php'><h5>Admin Panel</h5></a>";
                                        }
                                        echo"
                                       </div>
                                       <div class='logout'>
                                           <a href='../PHP/logout.php'><h5>Logout</h5></a>
                                       </div>
                                   </div>
                                </form>
                            </div>
                        </div>                            
                        ";
                        }
                    }
                else
                echo "
                <div class='loginicon'>
                    <a href='../PHP/index.php'><img src='../Media/Icons/Login.png'></a>
                </div>
                ";
                ?>              
              </div> 
              <script src="../JS/UI.js"></script> 
         </div>
