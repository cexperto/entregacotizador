
<?php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("SENDGRID_APIKEY");
$email    = new SendGrid\Email();
echo "ji";
$email->addTo("rattman.c@gmail.com")
      ->setFrom("latiendadelmoterobogota@gmail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);
