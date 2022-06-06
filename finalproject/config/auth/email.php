<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.org', 25))
  ->setUsername('metiadugna14@gmail.com')
  ->setPassword('0911123305')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message

function sendVerificationEmail($userEmail, $token){
    global $mailer;
    $body='<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <div>
                <p>
                    thank you for subscribing
                </p>
                <a href="http://localhost/index.php?token='. $token .'">verify</a>
            </div>
        </body>
    </html>';
    $message = (new Swift_Message('Verify your email address'))
  ->setFrom('metiadugna14@gmail.com')
  ->setTo($userEmail)
  ->setBody($body,'text/html');
  ;

// Send the message
$result = $mailer->send($message);
}

?>