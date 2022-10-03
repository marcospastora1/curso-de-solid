<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\BD;
use src\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao
{
  public function salvar()
  {
  }

  public function enviarNotificacao(Notificacao $notificaco)
  {
  }
}
