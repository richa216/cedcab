<?php
session_start();
$x = $_POST['email'];
$otp = rand(100000,1000000);
          echo($otp);
          $_SESSION['otp'] = $otp;
          require 'phpmailer/PHPMailerAutoload.php';
          $mail = new PHPMailer;
          //   $mail->SMTPDebug=4;
          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->Port=587;
          $mail->SMTPAuth=true;
          $mail->SMTPSecure='tls';
          $mail->Username='vricham21@gmail.com';
          $mail->Password='Richaverma@12345';
          $mail->setFrom('vricham21@gmail.com');
          $mail->addAddress($x);
          $mail->addReplyTo('vricham21@gmail.com');
          $mail->isHTML(true);
          $mail->Subject='PHP Mailer Subject';
          $mail->Body ='<h1 id="otp">'.$otp.'</h1>';

          if(!$mail->send())
          {
            echo '<script>alert("message could not sent")</script>';
          }
          else
          {
          	echo 'message sent';
          }



          
?>