<?php

namespace App\Http\Controllers;

use App\Service\AgendaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AgendaController extends Controller
{
    private AgendaService $service;

    public function __construct(AgendaService $service)
    {
        $this->service = $service;
    }

    public function agenda(): Response
    {
        return response()->view('agenda', [
            'data' => $this->service->paginate(10)
        ]);
    }

    public function show(string $id): Response
    {
        return response()->view('agenda.index', [
            'data' => $this->service->show($id)
        ]);
    }

    public function admin(): Response
    {
        return response()->view('admin.agenda.index', [
            'all' => $this->service->all(),
            'data' => $this->service->paginate(10)
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin.agenda.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'nama' => 'required',
            'tanggal_kegiatan' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required'
        ]);

        $this->service->store($validation);

        return redirect()->action([AgendaController::class, 'admin']);
    }

    public function edit(string $id): Response
    {
        return response()->view('admin.agenda.update', [
            'data' => $this->service->show($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'nama' => 'required',
            'tanggal_kegiatan' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required'
        ]);

        $this->service->update($validation, $id);

        return redirect()->action([AgendaController::class, 'admin']);
    }

    public function delete(string $id): RedirectResponse
    {
        $this->service->delete($id);

        return redirect()->action([AgendaController::class, 'admin']);
    }
}
