<?php

namespace App\Gateway;
class Gateway1 implements GatewayInterface
{
    private string $test;

    public function __construct()
    {
        $this->test = 'test1';
    }

    public function exectute(): string
    {
        return $this->test;
    }
}
