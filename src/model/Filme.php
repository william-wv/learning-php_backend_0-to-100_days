<?php

Class Filme {
  private string $nome;
  private int $anoLancamento;  
  private string $genero;
  private array $notas = [];



  function avalia (float $nota){
    $this->notas[] = $nota;
  }

  function media(): float {
    $somaNotas = array_sum($this->notas);
    $qtdNotas = count($this->notas);

    return $somaNotas / $qtdNotas;
  }

  // get
  public function getAnoLancamento(): int{
    return $this->anoLancamento;
  }

  // set
  public function setAnoLancamento(int $anoLancamento):void {
    $this->anoLancamento = $anoLancamento;
  }
}