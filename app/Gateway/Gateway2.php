<?php

namespace App\Gateway;

class Gateway2 implements GatewayInterface
{
    private string $test;

    public function __construct()
    {
        $this->test = 'test2';
    }

    public function execute(): string
    {
        return $this->test;
    }
}
