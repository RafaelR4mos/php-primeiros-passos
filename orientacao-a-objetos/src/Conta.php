<?php

class Conta
{
  private Titular $titular;
  private string $nomeTitular;
  private float $saldo;
  private static int $numeroDeContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar <= 0) {
      echo 'Não é possível depositar 0 ou um valor negativo';
      return;
    }

    $this->saldo = +$valorADepositar;
  }

  public function sacar(float $valorASacar): void
  {
    if ($valorASacar > $this->saldo) {
      echo 'Saldo indisponível para saque';
      return;
    }

    $this->saldo -= $valorASacar;
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo 'Saldo indisponível para transferência';
      return;
    }

    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

  public function recuperaNomeTitular(): string
  {
    return $this->titular->recuperaNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this->titular->recuperaCpf();
  }

  public function recuperaSaldo(): float
  {
    return $this->saldo;
  }

  public static function recuperaTotalContas()
  {
    return Conta::$numeroDeContas;
  }
}
