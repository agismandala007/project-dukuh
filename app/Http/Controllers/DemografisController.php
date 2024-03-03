<?php

namespace App\Http\Controllers;

use App\Service\DemografisService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DemografisController extends Controller
{

    private DemografisService $service;

    public function __construct(DemografisService $service)
    {
        $this->service = $service;
    }

    public function demografis(): Response
    {
        return response()->view('demografis', [
            'data' => $this->service->all()
        ]);
    }
}
