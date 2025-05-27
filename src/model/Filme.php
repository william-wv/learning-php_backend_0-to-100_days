<?php

Class Filme {
  public string $nome;
  public int $anoLancamento;  
  public string $genero;
  public array $notas = [];

  function avalia (float $nota){
    $this->notas[] = $nota;
  }

  function media(): float {
    $somaNotas = array_sum($this->notas);
    $qtdNotas = count($this->notas);

    return $somaNotas / $qtdNotas;
  }
}