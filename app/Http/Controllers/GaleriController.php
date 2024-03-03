<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GaleriController extends Controller
{
    public function galeri(): Response
    {
        return response()->view('galeri');
    }
}
