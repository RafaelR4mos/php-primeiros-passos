<?php

class Cpf
{
  private string $cpf;


  public function __construct(string $cpfFornecido)
  {
    $this->validateCpf($cpfFornecido);
    $this->cpf = $cpfFornecido;
  }

  public function recuperaNumero(): string
  {
    return $this->cpf;
  }

  public function validateCpf($cpfFornecido): void
  {
    $isCpfValid = filter_var($cpfFornecido, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
    ]);

    if ($isCpfValid === false) {
      echo 'CPF inválido!';
      exit();
    }
  }
}
