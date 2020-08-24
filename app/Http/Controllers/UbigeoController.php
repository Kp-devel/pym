<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubigeo;

class UbigeoController extends Controller
{
    public function departamentos(){
        return Ubigeo::departamentos();
    }

    public function provincias($id){
        return Ubigeo::provincias($id);
    }

    public function distritos($id){
        return Ubigeo::distritos($id);
    }
}
