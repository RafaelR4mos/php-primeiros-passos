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

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Pedro',
    'saldo' => 1000
  ],
  '123.456.789-11' => [
    'titular' => 'José',
    'saldo' => 2000
  ],
  '123.456.789-12' => [
    'titular' => 'Henrique',
    'saldo' => 3000
  ]
];

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], 200);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
