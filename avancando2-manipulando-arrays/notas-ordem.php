<?php

$notas = [
  'Ana' => null,
  'João' => 8,
  'Maria' => 9,
  'Roberto' => 7,
  'Vinicius' => 6,
  'Carlos' => 10
];

arsort($notas); //"a" de associative. Não perde a chave do array na ordenação.
//var_dump($notas);
//ksort($notas); Ordena levando em consideração as chaves
//sort($notas); Ordena crescente.
//rsort($notas); Ordena descrescente.


echo 'Ana está na lista? ' . PHP_EOL;
var_dump(array_key_exists('Ana', $notas));

echo 'Ana está na lista E fez a prova? ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);

// array_key_exists = Verifica se a chave existe.
// in_array = Verifica se o valor existe.
// isset = Verifica se a chave existe e não é nula.