
<html>
   <head>
      <title>OTP Verification</title>  
      <link rel="stylesheet" href="../CSS/UI.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="../Media/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
   </head>

   <body>
      <?php
            require("../HTML/nav.php");
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            require('../PHP/connection.php');
            session_start();

   if(isset($_POST['submit'])){

      $busname = $_POST['business-name'];
      $mobilenumber = $_POST['phone-no'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $address = $_POST['address'];
   
   
      echo"
         <div class='otpform'>
            <form action='../PHP/otpverify.php' method='post'>
               <input type='hidden' value='$busname' \>
               <input type='hidden' value='$mobilenumber' \>
               <input type='hidden' value='$state' \>
               <input type='hidden' value='$district' \>
               <input type='hidden' value='$city' \> 
               <input type='hidden' value='$pincode' \>
               <input type='hidden' value='$address' \>
   
               <p>OTP is sent to you email address $_SESSION[email]<p><br>
               <label>Enter OTP</label>
               <input type='number' name='otp''><br><br>
               <input type='submit' name='submit' id='submit'>
            </form>
         </div>"
   ;


         $email = $_SESSION['email'];
         $_SESSION['otp'] = rand(1000,9999);
      
         require ("../PHP/PHPMailer/PHPMailer.php");
         require ("../PHP/PHPMailer/SMTP.php");
         require ("../PHP/PHPMailer/Exception.php");
      
         $mail = new PHPMailer(true);
         $mail->SMTPDebug = 0;
        
         try {        
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ushop665@gmail.com';                     //SMTP username
            $mail->Password   = 'Yoooo@45';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            $mail->setFrom('ushop665@gmail.com', 'U SHOP');
      
            $mail->addAddress($email);     //Add a recipient
      
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'OTP verification from U SHOP';
            $mail->Body    = "You are one step away from becoming seller on U SHOP.
            Here is your OTP:$_SESSION[otp];
                ";  
            $issent = $mail->send();
      
            if($issent){
               echo "
               <script>
                  alert('OTP Sent to your email');
               </script>
               ";
            }
            return true;
        } catch(Exception $e) {
        echo $e->errorMessage(); //error messages from PHPMailer

      }
      
   }
   
      ?>
   </body>
</html>
     