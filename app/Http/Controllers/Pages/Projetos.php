<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Projetos extends Controller
{
    public function index()
    {
        return view('paginas.projetos.index');
    }
}
