<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Autentificador {
  
  public function tentaLogin(Funcionario $diretor, string $senha): void 
  {
    if ($diretor->podeAutenticar($senha)) {
      echo "Ok, usuário logado!";
    } else {
      echo "Senha incorreta";
    }
  }
}
