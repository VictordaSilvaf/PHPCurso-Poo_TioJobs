<?php

declare(strict_types=1);

namespace App;

interface PessoaJuridicaInterface
{
    public function getCnpj(): string;
}