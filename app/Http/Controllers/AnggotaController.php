<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Service\AnggotaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    private AnggotaService $service;

    public function __construct(AnggotaService $service)
    {
        $this->service = $service;
    }

    public function anggota(): Response
    {
        return response()->view('anggota');
    }

    public function show(string $id): Response
    {
        return response()->view('anggota.index', [
            'data' => $this->service->show($id)
        ]);
    }

    public function admin(): Response
    {
        return response()->view('admin.anggota.index', [
            'data' => $this->service->all()
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin.anggota.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        if ($request->file('images')) {
            $validation['gambar'] = $request->file('images')->store('post-images-anggota');
        }

        $this->service->store($validation);

        return redirect()->action([AnggotaController::class, 'admin']);
    }

    public function edit(): Response
    {
        return response()->view('admin.anggota.update');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validation = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        if ($request->file('images')) {
            if ($request->input('oldImage')) {
                Storage::delete($request->input('oldImage'));
            }

            $validation['gambar'] = $request->file('images')->store('post-images-anggota');
        }

        $this->service->update($validation, $id);

        return redirect()->action([AnggotaController::class, 'admin']);
    }

    public function delete(string $id): RedirectResponse
    {
        $this->service->delete($id);

        return redirect()->action([AnggotaController::class, 'admin']);
    }
}
