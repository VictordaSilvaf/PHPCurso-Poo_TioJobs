<?php

namespace App;

abstract class Pessoa{
    public string $name;

    public function showName(): string
    {
        return $this->name . PHP_EOL;
    }

    abstract public function getName();
}