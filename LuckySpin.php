
<html>

  <?php  
      session_start(); 
      require("../PHP/connection.php");
  ?>

  <head>
    <title>U SHOP-Lucky Spin</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/LuckySpin.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/UI.css" />
  </head>

  <body>
        <?php
            require('../HTML/nav.php');
        ?>
    <div id="app">
      <img class="marker" src="../Media/SpinPhotoes/Marker.png" />
      <img class="wheel" src="../Media/SpinPhotoes/Wheel.png" />
      <img class="button" src="../Media/SpinPhotoes/SpinButton.png" />
      <div class="display">-</div>
    </div>

    <script src="../JS/LuckySpin.js"></script>

  </body>
</html>