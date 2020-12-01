<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/SMTP.php';

function check_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function send_mail($email, $vorname, $nachname){
    try{
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'basten-it.eu';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailer@basten-it.eu';
        $mail->Password = 'nic65D&2';
        $mail->setFrom('mailer@basten-it.eu', 'ITA91');
        $mail->addAddress($email, $vorname.' '.$nachname);
        $mail->isHTML(true);
        $mail->Subject = 'Anfrage erhalten';
        $mail->msgHTML(file_get_contents(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/mail/thank-you.html')));
        $mail->AltBody = 'Vielen Dank für Ihre Anfrage! Wir werden sie innerhalb der nächsten 24 Stunden bearbeiten.';
        $mail->send();
    }catch(Exception $e){
        return $e;
    }
}

?>