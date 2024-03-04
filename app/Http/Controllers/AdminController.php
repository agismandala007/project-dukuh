<?php

namespace App\Http\Controllers;

use App\Service\AgendaService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private AgendaService $agendaService;

    public function __construct(AgendaService $agendaService)
    {
        $this->agendaService = $agendaService;
    }

    public function admin(): Response
    {
        return response()->view('admin.index',[
            'admin' => Auth::getName(),
            'agenda' => $this->agendaService->paginate(15)
        ]);
    }
}
