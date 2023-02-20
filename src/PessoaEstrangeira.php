<?php

namespace App;

class PessoaEstrangeira extends PessoaFisica
{
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}