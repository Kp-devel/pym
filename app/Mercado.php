<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Mercado extends Model
{
    public static function listMercados($dist){
        return DB::select(DB::raw("
            SELECT
                idMercado as id,
                nombreMercado as mercado         
            FROM mercado 
            WHERE estado=0
            and idDist_Fk=:dist
        "),array("dist"=>$dist));
    }

    public static function listSectoresMercados($id){
        return DB::select(DB::raw("
            SELECT 
                idSectorMercado as id,
                descripcion as sector
             FROM sector_mercado 
             WHERE estado=0 
             and idMercado_Fk=:id
        "),array("id"=>$id));
    }
}
