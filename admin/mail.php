<?php

echo "string";
require_once 'swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('shinexdealer@gmail.com')
  ->setPassword('ju@261166');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('shinexdealer@gmail.com' => 'Shinex Dealer'))
  ->setTo(array('isuru1302@gmail.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);




?>