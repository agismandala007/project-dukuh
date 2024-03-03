<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AgendaController extends Controller
{
    public function agenda(): Response
    {
        return response()->view('agenda');
    }
}
