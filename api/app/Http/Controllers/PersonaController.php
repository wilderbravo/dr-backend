<?php

namespace App\Http\Controllers;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function show(Persona $persona)
    {
        return $persona;
    }
}
