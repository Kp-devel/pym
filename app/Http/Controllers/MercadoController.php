<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mercado;

class MercadoController extends Controller
{
    public function listMercados($dist){
        return Mercado::listMercados($dist);
    }

    public function listSectoresMercados($id){
        return Mercado::listSectoresMercados($id);
    }
}
