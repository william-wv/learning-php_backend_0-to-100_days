<?php

class Pessoa
{
  protected string $nome;
  protected string $cpf;

  public function __construct(string $nome, string $cpf, string $cargo)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getcpf()
  {
    return $this->cpf;
  }

  public function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }
}
