<?php
//mysqli_connect("localhost","root","");
//mysqli_select_db("mashlog_demo");
$conn=mysqli_connect('localhost','root','','mashlog_demo');
$email=$_REQUEST["email"];
//$query=mysqli_query("SELECT * from user_login where Email='$email'");
//$row=mysqli_fetch_array($query);



$query = "SELECT * FROM user_login where Email='$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);


require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "indianxpressservice@gmail.com";
  $mail->Password = "indianxpress";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "indianxpressservice@gmail.com";
  $mail->FromName = "Indian x-press Service";
  
  $mail->addAddress($row['Email']);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$row["Password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
  $conn->close();
  ?>