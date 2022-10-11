<?php

namespace src;

class Whatsapp implements IMensagemToken
{
  public function enviar(): void
  {
    echo 'whatsapp: Seu token é 5555555';
  }
}
