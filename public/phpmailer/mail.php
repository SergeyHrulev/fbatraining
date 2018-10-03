<?php
   error_reporting(E_ALL);
    ini_set('display_errors','On');

    require('class.phpmailer.php');
    include('class.smtp.php');
    $mail = new PHPMailer(); 

$message = "mail from phpmailer";

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "ssl://server22.hosting.reg.ru"; // SMTP server
    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "info@fba-training.ru"; // SMTP account username
    $mail->Password   = "JR@m$10PM";        // SMTP account password
    $mail->SetFrom('info@fba-training.ru', 'MailFrom');
    $mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";
    $mail->MsgHTML($message);
    $address = "regrutesthosting@mail.ru";
    $mail->AddAddress($address, "MailTo");

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
?>
