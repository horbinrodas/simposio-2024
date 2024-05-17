<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participante;

class SimpoController extends Controller
{
    public function index()
    {
        return view('Inscribirse');
    }
}
