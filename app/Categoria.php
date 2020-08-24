<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Categoria extends Model
{
    public static function listCategorias(){
        return DB::select(DB::raw("
            select 
                idCatNeg as id,
                descripcion as categoria
             from categoria 
             where estado=0
        "));
    }
}
