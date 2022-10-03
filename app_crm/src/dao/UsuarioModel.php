<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao
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
