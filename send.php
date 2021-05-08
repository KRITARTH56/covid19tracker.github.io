<?php

$headers = 'From: kritarthsign2424@gmail.com' . "\r\n" .
  'MIME-version: 1.0' . "r\n";
   'Content-Type: text/html; charset-utf-8';
$result = mail("kritartht708@gmail.com","Hello worrld","this is email body",$headers);
var_dump($result);
?>