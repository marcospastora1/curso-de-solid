<?php

namespace src\dao;

use src\interfaces\ICadastro;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro
{
  public function salvar()
  {
  }

  public function enviarNotificacao(Notificacao $notificaco)
  {
  }

  public function registrarLog(Log $log)
  {
  }
}
