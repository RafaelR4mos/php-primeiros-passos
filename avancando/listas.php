<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$idadeList[] = 2; //Adiciona na ultima posicao numerica o valor.
$umaIdade = $idadeList[0]; //21

foreach ($idadeList as $idade) {
  echo $idade . PHP_EOL;
}
