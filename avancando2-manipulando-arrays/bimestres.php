<?php

$notasBimestre1 = [
  'João' => 8,
  'Ana' => 7,
  'Roberto' => 10,
  'Maria' => 6,
  'Vinicius' => 4
];

$notasBimestre2 = [
  'João' => 2,
  'Ana' => 6,
  'Roberto' => 9,
  'Maria' => 10
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
