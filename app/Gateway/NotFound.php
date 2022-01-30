<?php

namespace App\Gateway;

class NotFound implements GatewayInterface
{
    private string $test;

    public function __construct()
    {
        $this->test = 'Not found';
    }
    public function execute(): string
    {
        return $this->test;
    }
}
