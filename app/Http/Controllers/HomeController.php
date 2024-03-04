<?php

namespace App\Http\Controllers;

use App\Service\AgendaService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private AgendaService $agenda;

    public function __construct(AgendaService $agenda)
    {
        $this->agenda = $agenda;
    }

    public function home(): Response
    {
        return response()->view('welcome', [
            'agenda' => $this->agenda->limit(5)
        ]);
    }
}
