<?php

namespace App\Gateway;

interface GatewayInterface
{
    public function execute() : String;
}
