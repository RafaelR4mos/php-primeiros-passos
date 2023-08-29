<?php

function exibeMensagem(string $mensagem): void
{
  echo $mensagem . PHP_EOL;
}
function sacar(array $conta, float $valorASacar): array //É possível tipar os parâmetros e retornos de uma função
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar!");
  } else {
    $conta['saldo'] -= $valorASacar;
  }

  return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Só aceita números positivos em depósitos");
  }

  return $conta;
}

function titularComLetrasMaiusculas(array &$conta): void // o "&" indica que o array está sendo passado como referência.
{
  $conta['titular'] = strtoupper($conta['titular']);
}
