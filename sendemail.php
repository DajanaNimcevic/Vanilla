<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "includes/PHPMailer/src/Exception.php";
require "includes/PHPMailer/src/PHPMailer.php";
require "includes/PHPMailer/src/SMTP.php";
header("Content-Type: application/json");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$name       = @trim(stripslashes($_POST['name']));
$email       = @trim(stripslashes($_POST['email']));
$subject    = "Rezervacija";//@trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));

if(empty($name) || empty($email) || empty($subject) || empty($message)){
    exit(json_encode(["error"=>1]));
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    exit(json_encode(["error"=>2]));
}
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'testmailzaslanje@gmail.com';           // SMTP username
    $mail->Password   = '123daja321';                           // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('milosjovaniczaki@gmail.com');     // Add a recipient

    // Content
    $mail->Subject = $subject;
    $mail->Body    = $message;

header ("Location: contact.php");

