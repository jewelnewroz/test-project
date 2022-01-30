<?php

namespace App\Http\Controllers;

use App\Services\GatewayService;

class FrontController extends Controller
{
    protected GatewayService $service;
    public function __construct(GatewayService $gatewayService)
    {
        $this->service = $gatewayService;
    }

    public function index($gateway = 'NotFound')
    {
        $this->service->execute($gateway);
    }
}
