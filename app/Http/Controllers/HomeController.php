<?php

namespace App\Http\Controllers;

use App\Service\AgendaService;
use App\Service\AnggotaService;
use App\Service\BeritaService;
use App\Service\GaleriService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private AgendaService $agenda;
    private BeritaService $berita;
    private GaleriService $galeri;
    private AnggotaService $anggota;

    public function __construct(
        AgendaService $agenda, 
        BeritaService $berita,
        GaleriService $galeri,
        AnggotaService $anggota)
    {
        $this->agenda = $agenda;
        $this->berita = $berita;
        $this->galeri = $galeri;
        $this->anggota = $anggota;
    }

    public function home(): Response
    {
        return response()->view('welcome', [
            'berita' => $this->berita->limit(5),
            'agenda' => $this->agenda->limit(5),
            'galeri' => $this->galeri->limit(6)
        ]);
    }

    public function tentang(): Response
    {
        return response()->view('tentang', [
            'data' => $this->anggota->showDukuh('Kepala Desa')
        ]);
    }
}
