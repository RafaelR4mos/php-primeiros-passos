<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$contaNova = new Conta(new Titular(new Cpf('000.000.000-12'), 'Pedro'));
$contaNovaDois = new Conta(new Titular(new Cpf('000.000.000-11'), 'Fabricio'));
//$contaNovaTres = new Conta(new Titular(new Cpf('000.000.00022'), 'Fabricio')); Exibe erro de validação de CPF

$NumeroContasCriadas = $contaNova->recuperaTotalContas();

$contaNova->depositar(500);
$contaNova->sacar(100);

echo $contaNova->recuperaNomeTitular() . PHP_EOL;
echo $contaNova->recuperaCpfTitular() . PHP_EOL;
echo $contaNova->recuperaSaldo() . PHP_EOL;

echo 'Número contas criadas: ' . $NumeroContasCriadas;
