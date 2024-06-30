<?php  
    session_start(); 
    require("../PHP/connection.php");
?>

<html>
    <head>
        <title>U SHOP-Admin Panel Catagories</title>
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
                    <li class>
                        <a id="1" href="../HTML/AdminPanelDashboard.php"><i class="fa fa-home" aria-hidden="true" style="color:black"></i>
                        <span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelUsers.php"><i class="fa fa-users" aria-hidden="true" style="color:black"></i> 
                        <span>users</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelSeller.php"  class="active"><i class="fa fa-store-alt" aria-hidden="true" style="color:black"></i> 
                        <span>Sellers</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelCatagories.php" ><i class="fa fa-list" aria-hidden="true" style="color:black"></i> 
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
                        Catagories
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

                <div class="user">
                    <h1>users</h1>
                </div>
               
      <?php 
                require('../PHP/connection.php');

                $select= "SELECT * from seller_details"; 
                $result=mysqli_query($con,$select);
               
            if($result){ 
                $num_rows=mysqli_num_rows($result);
                 if($num_rows>0){     

                   echo" <div class='user-table'>
                    <table border='1px'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Business Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>";
                    while($row=$result->fetch_assoc()){
                     echo "<tr>
                             <td>".$row["seller_id"]."</td>
                             <td>".$row["business_name"]."</td>
                             <td>".$row["email"]."</td>
                             <td>
                               <a href=''><i class='fa fa-edit' aria-hidden='true' style='color:green'></i></a>
                               <a href=''><i class='fa fa-trash' aria-hidden='true' style='color:red'></i></a>
                             </td>                                  
                         </tr> ";
                    }
                 }
                 else{
                    echo "<p style='height:10%; width:90%; background-color:#afbdc0;color:black; font-weight:bolder; margin:5% 0 5% 5%;
                           padding:2% 0 2% 35%'>
                          No Seller in Database
                      </p>";
                }
             }
            else{
                echo "<p style='height:10%; width:90%; background-color:#afbdc0;color:black; font-weight:bolder; margin:5% 0 5% 5%;
                        padding:2% 0 2% 35%'>
                        Can not run query
                      </p>";
            }
       
       ?> 
         </table>


    </body>
</html>

