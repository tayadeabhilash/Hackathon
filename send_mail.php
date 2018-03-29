<?php
	$pass=$_POST['password'];


echo "<div>".$_POST['email']."</div>";

    $mailto = $_POST['email'];
    $mailSub = 'Your Password for Water Ministry Survey Registration';
    $mailMsg = 'Your Password is:'.$pass;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "abhlash345@gmail.com";
   $mail ->Password = "abhilash345";
   $mail ->SetFrom("Hackathon_team@gmail.com","CUSTOMER CARE");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
       echo "Mailer Error: " . $mail->ErrorInfo;
   }
   else
   {
       echo "Mail Sent";

   }

?>



   

