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
        $mail->SMTPDebug = 2;
        $mail->Host = 'basten-it.eu';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailer@basten-it.eu';
        $mail->Password = 'nic65D&2';
        $mail->setFrom('mailer@basten-it.eu', 'ITA91');
        $mail->addAddress($email, $vorname.' '.$nachname);
        $mail->isHTML(true);
        $mail->Subject = 'Test';
        $mail->msgHTML('test');
        $mail->AltBody = 'test';
        $mail->send();
    }catch(Exception $e){
        return $e;
    }
}

?>