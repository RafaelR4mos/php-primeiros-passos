<?php

$contasCorrentes = [
  11111111111 =>  [
    'titular' => 'Pedro',
    'saldo' => 1000
  ],
  11122233344 => [
    'titular' => 'Fabia',
    'saldo' => 3000
  ],
  999999999888 => [
    'titular' => 'Rafael',
    'saldo' => 2000
  ]
];

$contasCorrentes[33344477788] = [
  'titular' => 'Marlon',
  'saldo' => 5000
];

foreach ($contasCorrentes as $conta) {
  echo $conta["titular"] . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . PHP_EOL;
}
