<?php

session_start();

define('PATH', dirname(__FILE__));
require realpath(PATH.'/phpmailer/includes/PHPMailer.php');
require realpath(PATH.'/phpmailer/includes/SMTP.php');
require realpath(PATH.'/phpmailer/includes/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    if( isset($_POST['sender-email']) && $_POST['sender-email'] != ''){
        
        if( filter_var($_POST['sender-email'], FILTER_VALIDATE_EMAIL) ){

            $sender = $_POST['sender-email'];
            $subject = $_POST['subject-email'];
            $content = $_POST['content-email'];

            $mail = new PHPMailer();
            $mail->isSMTP();
            // null
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            var_dump($mail->SMTPAuth);
            $mail->SMTPSecure = "tls";
            var_dump($mail->SMTPSecure);
            $mail->Port = "587";
            var_dump($mail->Port);
            $mail->Username = "matekst.portal@gmail.com";
            var_dump($mail->Username);
            $mail->Password = '';
            var_dump($mail->Password);

            $mail->Subject = $subject;
            $mail->setFrom("matekst.portal@gmail.com");
            $body = "";
            $body .= "Cześć Magda, dostałaś wiadomość z portalu matekst.pl \r\n";
            $body .= "Wiadomość została wysłana od: ".$sender. "\r\n";
            $body .= "Oto treść wiadomości: \r\n";
            $body .= $content;

            $mail->Body = $body;

            $mail->addAddress("matekst.portal@gmail.com");
            
            if($mail->Send()){
                $_SESSION['message_send'] = 'true';
            }
            var_dump($message_send);
            $mail->smtpClose();

            header('Location: /#contact');
            exit();
        }


    }

?>