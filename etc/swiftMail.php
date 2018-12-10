<?php

function swiftMail($templateName, $viewVariables = [])
{
    $conf = require __DIR__ . './../config/mail.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport($conf['smtp'], $conf['port']))
        ->setUsername($conf['userName'])
        ->setPassword($conf['password']);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom($conf['from'])
        ->setTo($conf['to'])
        ->setBody(getView('title', $templateName, 'layout_mail.php', $viewVariables));

    // Send the message
    $result = $mailer->send($message);
    var_dump($result);
    die;
}