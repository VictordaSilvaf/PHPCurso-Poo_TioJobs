<?php

namespace App;

use Exception;
use App\ValueObjects\Email;

class Customer
{
    public string $name;
    public Email $email;

    /**
     * @throws Exception
     */
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = new Email($email);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return (string) $this->email;
    }
}