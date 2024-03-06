<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Service\GaleriService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    private GaleriService $service;

    public function __construct(GaleriService $service)
    {
        $this->service = $service;
    }

    public function galeri(): Response
    {
        return response()->view('galeri', [
            'data' => $this->service->all()
        ]);
    }

    public function admin(): Response
    {
        return response()->view('admin.galeri.index', [
            'data' => $this->service->paginate(15)
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin.galeri.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        if ($request->file('gambar')) {
            $validation['gambar'] = $request->file('gambar')->store('post-images-galeri');
        }

        $this->service->store($validation);

        return redirect()->action([GaleriController::class, 'admin']);
    }

    public function edit(string $id): Response
    {
        return response()->view('admin.galeri.update', [
            'data' => $this->service->show($id)
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validation = $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        if ($request->file('gambar')) {
            if ($request->input('oldImage')) {
                Storage::delete($request->input('oldImage'));
            }

            $validation['gambar'] = $request->file('gambar')->store('post-images-galeri');
        }

        $this->service->update($validation, $id);

        return redirect()->action([GaleriController::class, 'admin']);
    }

    public function delete(string $id): RedirectResponse
    {
        $delete = $this->service->show($id);

        Storage::delete($delete[0]->gambar);

        $this->service->delete($id);

        return redirect()->action([GaleriController::class, 'admin']);
    }
}
