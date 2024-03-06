<?php

namespace App\Http\Controllers;

use App\Service\BeritaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    private BeritaService $service;

    public function __construct(BeritaService $service)
    {
        $this->service = $service;
    }

    public function berita(): Response
    {
        return response()->view('berita', [
            'data' => $this->service->paginate(5)
        ]);
    }

    public function show(string $id): Response
    {
        return response()->view('berita.index', [
            'data' => $this->service->show($id)
        ]);
    }

    public function admin(): Response
    {
        return response()->view('admin.berita.index', [
            'data' => $this->service->paginate(5)
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin.berita.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $validation = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        if ($request->file('gambar')) {
            $validation['gambar'] = $request->file('gambar')->store('post-images-berita');
        }

        $this->service->store($validation);

        return redirect()->action([BeritaController::class, 'admin']);
    }

    public function edit(string $id): Response
    {
        return response()->view('admin.berita.update', [
            'data' => $this->service->show($id)
        ]);
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

            $validation['gambar'] = $request->file('images')->store('post-images-berita');
        }

        $this->service->update($validation, $id);

        return redirect()->action([BeritaController::class, 'admin']);
    }

    public function delete(string $id): RedirectResponse
    {
        $this->service->delete($id);

        return redirect()->action([BeritaController::class, 'admin']);
    }
}
