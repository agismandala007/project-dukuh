<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Service\AgendaService;
use App\Service\AnggotaService;
use App\Service\DemografisService;
use App\Service\UserService;

class AdminController extends Controller
{
    private AgendaService $agendaService;
    private DemografisService $demografisService;
    private AnggotaService $anggotaService;
    private UserService $userService;

    public function __construct(
        AgendaService $agendaService,
        DemografisService $demografisService,
        AnggotaService $anggotaService,
        UserService $userService
    ) {
        $this->agendaService = $agendaService;
        $this->demografisService = $demografisService;
        $this->anggotaService = $anggotaService;
        $this->userService = $userService;
    }

    public function admin(): Response
    {
        return response()->view('admin.index', [
            'admin' => $this->userService->paginate(5),
            'agenda' => $this->agendaService->paginate(15),
            'demografis' => $this->demografisService->all(),
            'anggota' => $this->anggotaService->paginate(15)
        ]);
    }
}
