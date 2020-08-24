<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mercado;

class MercadoController extends Controller
{
    public function listMercados(){
        return Mercado::listMercados();
    }

    public function listSectoresMercados($id){
        return Mercado::listSectoresMercados($id);
    }
}
