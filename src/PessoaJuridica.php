<?php

namespace App;

final class PessoaJuridica extends Pessoa implements PessoaJuridicaInterface
{
    public string $cnpj;

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function getName(): string
    {
        return $this->name;
    }
}