<?php

namespace src;

class Sms implements IMensagemToken
{
  public function enviar(): void
  {
    echo 'sms: Seu token é 5555555';
  }
}
