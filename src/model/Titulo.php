<?php

class Titulo
{
  private array $notas;

  public function __construct(
    public readonly string $nome, 
    public readonly int $anoLancamento, 
    public readonly Genero $genero,
    ) {
    $this->notas = [];
  }

  // set
  public function setAnoLancamento(int $anoLancamento): void
  {
    $this->anoLancamento = $anoLancamento;
  }

// functions
  function avalia(float $nota)
  {
    $this->notas[] = $nota;
  }

  function media(): float
  {
    $somaNotas = array_sum($this->notas);
    $qtdNotas = count($this->notas);

    return $somaNotas / $qtdNotas;
  }

  function duracaoEmMinutos(): int{
    return 0;
  }
}