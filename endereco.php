<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Guarapuava','centro','Azevedo Portugal', '1264');

echo $umEndereco->bairro;

exit();
echo $umEndereco . PHP_EOL;