<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autentificador {
  
  public function tentaLogin(Diretor $diretor, string $senha): void 
  {
    if ($diretor->podeAutenticar($senha)) {
      echo "Ok, usuário logado!";
    } else {
      echo "Senha incorreta";
    }
  }
}
