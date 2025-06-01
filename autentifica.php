<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autentificador;

require_once 'autoload.php';

$auth = new Autentificador();
$umDiretor = new Diretor('Flavia',new CPF("123.456.789-10"),30000);

$auth->tentaLogin($umDiretor,'4321');
