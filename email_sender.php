<?php

define('PATH', dirname(__FILE__));
var_dump(PATH);
include './phpmailer/includes/PHPmailer.php';
include './phpmailer/includes/SMTP.php';
include './phpmailer/includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    $message_send = false;
    if( isset($_POST['sender-email']) && $_POST['sender-email'] != ''){
        
        if( filter_var($_POST['subject-email'], FILTER_VALIDATE_EMAIL) ){

            $sender = $_POST['sender-email'];
            $subject = $_POST['subject-email'];
            $content = $_POST['content-email'];

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "matekst-portal@gmail.com";
            $mail->Password = '';

            $mail->Subject = $subject;
            $mail->setFrom("matekst-portal@gmail.com");
            $body = "";
            $body .= "Cześć Magda, dostałaś wiadomość z portalu matekst.pl \r\n";
            $body .= "Wiadomość została wysłana od: ".$sender. "\r\n";
            $body .= "Oto treść wiadomości: ".$content. "\r\n";

            $mail->Body = $body;

            $mail->addAddress("matekst-portal@gmail.com");
            
            if($mail->Send()){
                $message_send = true;
            }

            $mail->smtpClose();

            // header('Location: index.php');
        }


    }
    // $contactSectionUrl = $_SERVER['SERVER_NAME'] . '/#contact';
    header('Location: index.php/#contact');
?>