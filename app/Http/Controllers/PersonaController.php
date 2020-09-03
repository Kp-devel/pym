<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    public function validarDni($dni){
        return Persona::validarDni($dni);
    }
}
