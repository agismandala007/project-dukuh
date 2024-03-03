<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BeritaController extends Controller
{
    public function berita(): Response
    {
        return response()->view('berita');
    }
}
