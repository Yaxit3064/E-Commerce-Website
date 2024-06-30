<?php  
    session_start(); 
    require("../PHP/connection.php");
?>

<html>
    <head>
        <title>U SHOP-Admin Panel Dashboard</title>
        <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <link rel="stylesheet" type="text/css" href="../CSS/AdminPanel.css">
        <link href="../Media/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    </head>

    <body>

        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="logo">
                <img src="../Media/Logo/logo6.png" \>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a id="1" href="../HTML/AdminPanelDashboard.php" class="active"><i class="fa fa-home" aria-hidden="true" style="color:black"></i>
                        <span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelUsers.php"><i class="fa fa-users" aria-hidden="true" style="color:black"></i> 
                        <span>users</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelSeller.php"><i class="fa fa-store-alt" aria-hidden="true" style="color:black"></i> 
                        <span>Sellers</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelCatagories.php"><i class="fa fa-list" aria-hidden="true" style="color:black"></i> 
                        <span>Catagories</span></a> 
                    </li>

                    <li>
                        <a href=""><i class="fa fa-key" aria-hidden="true" style="color:black"></i>  
                        <span>Password</span></a>
                    </li>

                    <li>
                        <a href="../PHP/logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true" style="color:black"></i> 
                        <span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>

            <div class="main-content">
                <header>
                    <h1>
                        <label for="nav-toggle">
                            <i class="fas fa-bars" aria-hidden="true" style="color:black"></i>
                        </label>
                        Dashboard
                    </h1>
                    <div class="search">
                        <i class="fa fa-search" aria-hidden="true" style="color:black"></i>                
                        <input type="search" placeholder="Search...">    
                    </div>
                <?php
                        $email = $_SESSION['email'];
                        $query = "SELECT `photo` FROM users_details WHERE `email` = '$email'";
                        $result = mysqli_query($con,$query);
                        $result_set = mysqli_fetch_assoc($result);
                        echo"
                        <img src='../Media/Users/$result_set[photo]'>
                        ";
                ?>
                    
                </header>
                
                <div class="cards">
                 <a href="">  
                    <div class="card">
                        <div class="text">
                            <h1>100</h1>
                            <span> Total users</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                    </div>  
                </a>       <!-- card 1 ends -->

                  <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>20</h1>
                            <span>Total sellers</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-store" aria-hidden="true"></i>
                        </div>
                    </div>  
                </a>  <!--card 2 ends -->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>50</h1>
                            <span>Total Products</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                    </div> 
                </a>  <!-- card 3 ends-->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>5</h1>
                            <span>Total catagories</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </div>
                    </div>   
                </a>        <!--card 4 ends -->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>43</h1>
                            <span>Total sub-catagories</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                        </div>
                    </div> 
                </a>          <!--card 5 ends-->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>10</h1>
                            <span>Total feedbacks</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                    </div> 
                </a>        <!--card 6 ends -->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>20</h1>
                            <span>Pending Order</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                    </div> 
                </a>            <!-- card 7 ends -->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>2</h1>
                            <span>Cancelled Order</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                    </div>  
                </a> <!-- card 8 ends-->

                <a href="">
                    <div class="card">
                        <div class="text">
                            <h1>28</h1>
                            <span>Completed Order</span>
                        </div>
                        
                        <div class="icon">
                            <i class="fa fa-shopping-bag" aria-hidden="true" ></i>

                        </div>
                    </div> 
                </a>  <!-- card 9 ends -->
            </div>   <!-- end cards -->
        </div>  <!--   main-content ends -->
    </body>  
</html> 