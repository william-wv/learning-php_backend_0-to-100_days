<?php

class Funcionario extends Pessoa
{
  private $cargo;

  public function __construct(string $nome, string $cpf, string $cargo)
  {
    parent::__construct($nome,$cpf);
    $this->cargo = $cargo;
  }

  public function getCargo()
  {
    return $this->cargo;
  }

  public function alteraNome(string $nome)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  } 
}
