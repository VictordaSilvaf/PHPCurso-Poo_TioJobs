<?php

declare(strict_types=1);

namespace App;

class PessoaFisica extends Pessoa implements PessoaFisicaInterface
{
    public string $age;
    public string $gender;
    public string $cpf;

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

