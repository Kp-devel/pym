<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Empresa extends Model
{
    public static function insertEmpresa(Request $rq,$fecha){
        $ruc=$rq->ruc;
        $razon_social=$rq->razon_social;
        DB::insert("
            insert into empresa (RUC,razonSocial,estado,fechaAdd,fechaUpdate)
            values (:ruc,:rz,0,:fec,:fecUp)
        ",array("ruc"=>$ruc,"rz"=>$razon_social,"fec"=>$fecha,"fecUp"=>$fecha));
        return "ok";
    }

    public static function selectIdEmpresa(Request $rq,$fecha){
        $ruc=$rq->ruc;
        return DB::select(DB::raw("
            select idEmpresa
            from empresa 
            where RUC=:ruc
            and fechaAdd=:fec
        "),array("ruc"=>$ruc,"fec"=>$fecha));
    }
}
