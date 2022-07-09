<?php

namespace APP\Model;

class Seller
{
    // Propriedades
    private string $name;
    private float $CNPJ;
    private int $email;
    private bool $isActive;

    public function __construct(
        string $name,
        float $CNPJ,
        int $email,
        bool $isActive = true
    )
    {
        $this->name = $name;
        $this->CNPJ = $CNPJ;
        $this->email = $email;
        $this->isActive = $isActive;
    }
}