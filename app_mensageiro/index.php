<?php

require __DIR__ . '/vendor/autoload.php';

use src\Mensageiro;
use src\email;
use src\sms;
use src\Whatsapp;

//-----email

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br/>';
echo '<br/>';

//------sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();


echo '<br/>';
echo '<br/>';

//------sms
$msg2 = new Mensageiro(new Whatsapp());
$msg2->enviarToken();

/* //-----email

$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br/>';
echo '<br/>';

//------sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
 */