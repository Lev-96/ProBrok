<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@probrok.am';
        $mail->Password   = '2xqAdXXKykedte73A5hb';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('noreply@probrok.am', 'Pro Brok');
        $mail->addAddress('noreply@probrok.am', '');


        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Հետադարձ կապի հաղորդագրություն';
        $body = file_get_contents('template.html');
        $body = str_replace('{{name}}', $user_name, $body);
        $body = str_replace('{{email}}', $user_email, $body);
        $body = str_replace('{{message}}', nl2br($user_message), $body);

        $mail->Body = $body;
        $mail->send();
        $mail->clearAddresses();
        $mail->addAddress($user_email);
        $mail->msgHTML('<h1>հետադարձ կապի հաղորդագրությունը հաջողությամբ ուղարկվել է</h1>');
        $mail->Subject = 'Հետադարձ կապ';
        $mail->send();
        $_SESSION['feedback_message'] = 'Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է:';
        $_SESSION['feedback_message_style'] = 'success';

        header('location: index.php');
        exit();
    } catch (Exception $e) {
        $_SESSION['feedback_message'] = 'Հաղորդագրությունը չհաջողվեց ուղարկել:';
        $_SESSION['feedback_message_style'] = 'warning';
        header('location: index.php');
        exit();
    }
}
