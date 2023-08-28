<?php

$message = 'Você só pode entrar se tiver apartir de 18 anos.' . PHP_EOL;
$age = 16;

echo $message;

if ($age >= 18) {
  echo "Você tem $age anos" . PHP_EOL;
  echo 'Pode entrar!';
} else {
  echo "Você só tem $age anos." . " Você não pode entrar.";
}
