<?php
// include './funcoes.php'; usado mais para códigos que não são required
// require './funcoes.php'; pode ser declarado mais de uma vez e vai copiar o codigo do src.
require_once './funcoes.php'; // pode requirir o codigo do caminho apenas 1 vez.

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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);
//unset($contasCorrentes['123.456.789-12']); remove um item do array

// Usando o list ou desestruturação
// foreach ($contasCorrentes as $cpf => $conta) {
//list('titular' => $titular, 'saldo' => $saldo) = $conta;
//   ['titular' => $titular, 'saldo' => $saldo] = $conta;
//   exibeMensagem("$cpf $titular $saldo");
// }

// foreach ($contasCorrentes as $cpf => $conta) {
//   exibeMensagem(
//     "$cpf {$conta['titular']} {$conta['saldo']}"
//   );
// }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP com HTML - Básico</title>
</head>

<body>
  <h1>Contas correntes</h1>

  <dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
      </dt>
      <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
  </dl>
</body>

</html>