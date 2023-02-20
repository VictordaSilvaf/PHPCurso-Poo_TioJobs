<?php

namespace App\ValueObjects;

use Exception;

class Email
{
    /**
     * @throws Exception
     */
    public function __construct(private string $email)
    {
        $this->validate();
    }

    /**
     * @throws Exception
     */
    public function validate(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email inválido');
        }
    }

    public function __toString(): string
    {
        return $this->email;
    }
}