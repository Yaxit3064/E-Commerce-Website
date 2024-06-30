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
                        <a href="../HTML/AdminPanelUsers.php" ><i class="fa fa-users" aria-hidden="true" style="color:black"></i> 
                        <span>users</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelSeller.php"><i class="fa fa-store-alt" aria-hidden="true" style="color:black"></i> 
                        <span>Sellers</span></a>
                    </li>

                    <li>
                        <a href="../HTML/AdminPanelCatagories.php"  class="active"><i class="fa fa-list" aria-hidden="true" style="color:black"></i> 
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

                <div class="category">
                    <h1>Catagories</h1>
                </div>
                
                <div class="checkbox-container">
                <input type="checkbox" id='addcategorycheckbox'>
                </div>

                <div class="addButton">
                   <button><label for='addcategorycheckbox'>Add category</label></button>
                </div>
          
                <div class='form-container'>
                    <form id='addcategoryform' action='../PHP/AdminPanelChange.php' method='post'>
                        <label for='addcategorycheckbox'><i class='fas fa-times'></i></label>
                        <p>Enter name:</p>    
                        <input type='text' name='categoryname'> 
                        <button type='submit' name='changecatbutton'>Save Changes</button>
                    </form>
                </div>
                 <script>
                     document.getElementById('addcategorycheckbox').onchange = function () {
                        let form = document.getElementById('addcategoryform');
                        if (document.getElementById('addcategorycheckbox').checked) {
                            form.style.display = 'block';
                        } else {
                            form.style.display = 'none';
                        }
                    }
                </script>
<!-- here -->

              <?php
                   $select="SELECT *from category_details"; 
                   $result=mysqli_query($con,$select);
                   $num_rows= mysqli_num_rows($result);
                   
                   if($result){
                       if($num_rows>0){

                        echo"
                        <div class='category-table'>
                        <table border='1px'>
                            <thead>
                                <tr>
                                    <th>category ID</th>
                                    <th>category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>     
                        ";
                         $var=1;
                           while($row=$result->fetch_assoc()){   
                            $categoryid = $row['category_id'];
                            $categoryname = $row['category_name'];   
                            $changecatcheckbox = 'changecatcheckbox'.$var;
                            $changecatform = 'changecatform'.$var;
                            $deletecatcheckbox = 'deletecatcheckbox'.$var;
                            $deletecatform = 'deletecatform'.$var;
                            echo"
                                                     
                               <tr>
                                 <td>$categoryid</td>
                                 <td>$categoryname</td>
                                 <td>
                                  <div class='checkbox-container'>
                                    <input type='checkbox' id='$changecatcheckbox'>
                                    <input type='checkbox' id='$deletecatcheckbox'>
                                  </div>
                                    
                                    <label for=$changecatcheckbox>
                                        <i class='fa fa-edit' aria-hidden='true' style='color:blue'></i>
                                    </label>
                                    <label for=$deletecatcheckbox>
                                        <i class='fa fa-trash' aria-hidden='true' style='color:red'></i>
                                    </label>
                                      <div class='form-container'>
                                        <form id='$changecatform' action='../PHP/AdminPanelChange.php' method='post'>
                                            <label for='$changecatcheckbox'><i class='fas fa-times'></i></label>
                                            <input type='hidden' name='categoryid' value='$categoryid'>
                                            <p>Enter new name:</p>    
                                            <input type='text' name='categoryname' value = '$categoryname'> 
                                            <button type='submit' name='changecatbutton'>Save Changes</button>
                                        </form>
                                      </div>
  
                                      <div class='form-container'>
                                         <form id='$deletecatform' action='../PHP/AdminPanelChange.php' method='post'>
                                            <label for=$deletecatcheckbox><i class='fas fa-times'></i></label>
                                                <input type='hidden' name='categoryid' value='$categoryid'>
                                                <h3>Are you sure?</h3>
                                                <button type='submit' name='deletecat' id='yes'>yes</button>
                                                <button type='button' id='no'><label for='$deletecatcheckbox'>No</label</button>
                                         </form>    
                                       </div>
                                     </td>
                                   </tr>  
                            
                            <script>
                             document.getElementById('$changecatcheckbox').onchange = function () {
                                let form = document.getElementById('$changecatform');
                                if (document.getElementById('$changecatcheckbox').checked) {
                                    form.style.display = 'block';   
                                } else {
                                    form.style.display = 'none';
                                }
                            }

                            document.getElementById('$deletecatcheckbox').onchange = function () {
                                let form = document.getElementById('$deletecatform');
                                if (document.getElementById('$deletecatcheckbox').checked) {
                                    form.style.display = 'block';
                                } else {
                                    form.style.display = 'none';
                                }
                            }
                            </script>
                            ";
                    
                            $var++;
                            }  
                                                                                                    
                       }
                       else{
                        echo "<p style='height:10%; width:90%; background-color:#afbdc0;color:black; font-weight:bolder; margin:5% 0 5% 5%;
                                   padding:2% 0 2% 35%'>
                                   No Categories in Database
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
            </div>    <!-- category table ends -->

            <div class="category">
                    <h1>Sub-Catagories</h1>
            </div>

            <div class="addButton">
               <a href=""><button>Add Sub-category</button></a>
            </div>

            <div class='sub-category-table'>
               
            <table border='1px'>
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Parent category ID</th>
                           <th>Action</th>
                       </tr>
             </thead>
                    <?php      
                        $select="SELECT *FROM sub_category_details";
                        $result=mysqli_query($con,$select);
                        $count = 1; 
                        // $changeSubCatCb = "changeSubCatId".$count;
                        // $deleteSubCatCb = "deleteSubCatId".$count;
                        if($result){
                            $num_rows=mysqli_num_rows($result);
                            if($num_rows>0){
                                
                                while($row = $result->fetch_assoc()){
                                    $subCatId = $row['sub_cat_id'];
                                    $subCatName = $row['sub_cat_name'];
                                     echo" 
                                     <div class='checkbox-container'>
                                        <input type ='checkbox' id='changeSubCatCb$count'>
                                         <input type ='checkbox' id='deleteSubCatCb$count'>
                                    </div>
                                          <tr>
                                             <td>".$subCatId."</td>
                                             <td>".$subCatName."</td>
                                             <td>".$row["parent_cat_id"]."</td> 
                                             <td>
                                                <label for='changeSubCatCb$count'>
                                                    <i class='fa fa-edit' aria-hidden='true' style='color:blue'></i>
                                                </label>
                                                <label for='deleteSubCatCb$count'>
                                                    <i class='fa fa-trash' aria-hidden='true' style='color:red'></i>
                                                <//label>
                                              
                                             
                                             <div class='form-container'>
                                                 <form id='changeSubCatForm$count' action='../PHP/AdminPanelChange.php' method='post'>
                                                     <label for='changeSubCatCb$count'><i class='fas fa-times'></i></label>
                                                     <input type='hidden' name='subcategoryid' value='$subCatId'>
                                                     <p>Enter new name:</p>    
                                                     <input type='text' name='subcategoryname' value = '$subCatName'> 
                                                     <button type='submit' name='changesubcatbutton'>Save Changes</button>
                                                 </form>
                                             </div>
       
                                           <div class='form-container'>
                                                  <form id='deleteSubCatForm$count' action='../PHP/AdminPanelChange.php' method='post'>
                                                     <label for=deleteSubCatCb$count><i class='fas fa-times'></i></label>
                                                         <input type='hidden' name='subcatid' value='$subCatId'>
                                                         <h3>Are you sure?</h3>
                                                         <button type='submit' name='deletesubcatbutton' id='yes'>yes</button>
                                                         <button type='button' id='no'><label for='deleteSubCatId$count'>No</label</button>
                                                  </form> 
                                            </div>       
                                            </td>                                         
                                           </tr>
                                           <script>
                                           document.getElementById('changeSubCatCb$count').onchange = function () {
                                              let form = document.getElementById('changeSubCatForm$count');
                                              if (document.getElementById('changeSubCatCb$count').checked) {
                                                  form.style.display = 'block';
                                              } else {
                                                  form.style.display = 'none';
                                              }
                                          }

                                          document.getElementById('deleteSubCatCb$count').onchange = function () {
                                              let form = document.getElementById('deleteSubCatForm$count');
                                              if (document.getElementById('deleteSubCatCb$count').checked) {
                                                  form.style.display = 'block';
                                              } else {
                                                  form.style.display = 'none';
                                              } 
                                          }        
                                          </script>
                                           ";
                                           $count++;

                                }
                            }

                            else{
                                echo "<p style='height:10%; width:90%; background-color:#afbdc0;color:black; font-weight:bolder; margin:5% 0 5% 5%;
                                                padding:2% 0 2% 35%'>
                                          No Sub Catagories in Database
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
                </table>    <!-- category table ends -->   
              </div>     <!--sub-category table ends--> 
            </div> <!--   main-content ends -->
    </body>  
</html>

