<?php

$notas = [
  [
    'nome' => 'Pedro',
    'nota' => 9.5
  ],
  [
    'nome' => 'Ana',
    'nota' => 7.2
  ],
  [
    'nome' => 'Ruan',
    'nota' => 3.4
  ]
];

function ordenaNotas(array $nota1, array $nota2): int
{
  if ($nota1['nota'] > $nota2['nota']) {
    return -1;
  }

  if ($nota2['nota'] > $nota1['nota']) {
    return 1;
  }

  return 0;

  // return $nota2['nota'] <=> $nota1['nota']; Faz tudo que o if faz acima em 1 linha.
}

usort($notas, 'ordenaNotas'); //Recebe um callback para ordenar. "u" = user.
var_dump($notas);
