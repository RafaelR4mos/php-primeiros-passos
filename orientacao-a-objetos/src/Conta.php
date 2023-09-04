<?php

class Conta
{
  public string $cpfTitular;
  public string $nomeTitular;
  public float $saldo = 0;

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar <= 0) {
      echo 'Não é possível depositar 0 ou um valor negativo';
    } else {
      $this->saldo = +$valorADepositar;
    }
  }

  public function sacar(float $valorASacar): void
  {
    if ($valorASacar > $this->saldo) {
      echo 'Saldo indisponível para saque';
    } else {
      $this->saldo -= $valorASacar;
    }
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo 'Saldo indisponível para transferência';
    } else {
      $this->sacar($valorATransferir);
      $contaDestino->depositar($valorATransferir);
    }
  }
}
