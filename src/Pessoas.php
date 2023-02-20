<?php

namespace App;

class Pessoas
{
    public array $pessoas;
    public function __construct(array $pessoas)
    {
        $this->pessoas = $pessoas;
    }

    public function show(): void
    {
        foreach ($this->pessoas as $pessoa) {
            $this->showNames($pessoa);
        }
    }

    public function showNames(Pessoa $pessoa): void
    {
        echo $pessoa->getName() . PHP_EOL;
    }
}