<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'vendor/autoload.php';

$firstname = $_POST['name'];
$lastname = $_POST['surname'];
$subject = $firstname . " " . $lastname . " dan Bir mesaj";
$message = $_POST['message'];
$sender = $_POST['email'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "gmail@username";
$mail->Password   = "secret";

$mail->IsHTML(true);
$mail->AddAddress("mersoycan21@gmail.com", "web");
$mail->SetFrom("mersoycan21212@gmail.com", "Web");

$mail->Subject = $firstname . " " . $lastname . " bir mail gonderdi.";
$content = "Gönderilen mesaj: " . $message . " " . $sender;

$mail->MsgHTML($content);
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
  header('location: index.html');

}
?>