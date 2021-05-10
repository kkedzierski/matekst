<?php

    $message_send = false;
    if( isset($_POST['sender-email']) && $_POST['sender-email'] != ''){
        
        if( filter_var($_POST['subject-email'], FILTER_VALIDATE_EMAIL) ){

            $sender = $_POST['sender-email'];
            $subject = $_POST['subject-email'];
            $content = $_POST['content-email'];
            
            $to = 'kamil.kedzierski@onet.com.pl';
            $body = "";
            $body .= "Cześć Magda, dostałaś wiadomość z portalu matekst.pl \r\n";
            $body .= "Wiadomość została wysłana od: ".$sender. "\r\n";
            $body .= "Oto treść wiadomości: ".$sender. "\r\n";
            
            mail($to, $subject, $body);

            $message_send = true;
            header('Location: index.php');
        }


    }
    $contactSectionUrl = $_SERVER['SERVER_NAME'] . '/#contact';
    header('Location: '.$contactSectionUrl);
?>