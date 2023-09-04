<?php

class Titular
{
  private Cpf $cpf;
  private string $nome;

  public function __construct(Cpf $cpfFornecido, string $nome)
  {
    $this->cpf = $cpfFornecido;
    $this->nome = $nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->recuperaNumero();
  }

  public function recuperaNome(): string
  {
    return $this->nome;
  }
}
