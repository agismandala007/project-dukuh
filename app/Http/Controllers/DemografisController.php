<?php

namespace App\Http\Controllers;

use App\Service\DemografisService;
use Illuminate\Http\RedirectResponse;
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

    public function admin(): Response
    {
        return response()->view('admin.demografis.index', [
            'data' => $this->service->paginate(15)
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin.demografis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'rt' => 'required|min:1',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|min:1',
            'agama' => 'required|min:1',
            'status' => 'required|min:1',
            'tingkat_pendidikan' => 'required|min:1',
            'mata_pencarian' => 'required|min:1'
        ]);

        $this->service->store($validation);

        return redirect()->action([DemografisController::class, 'admin']);
    }

    public function edit(): Response
    {
        return response()->view('admin.demografis.update');
    }

    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'rt' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'tingkat_pendidikan' => 'required',
            'mata_pencarian' => 'required'
        ]);

        $this->service->update($validation, $id);

        return redirect()->action([DemografisController::class, 'admin']);
    }

    public function delete(string $id)
    {
        $this->service->delete($id);

        return redirect()->action([DemografisController::class, 'admin']);
    }
}
