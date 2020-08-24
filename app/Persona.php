<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Persona extends Model
{
    public static function insertPersona(Request $rq,$fecha){
        $ap_parteno=$rq->ap_paterno;
        $ap_marteno=$rq->ap_materno;
        $nombres=$rq->nombres;
        $dni=$rq->dni;
        $fecha_nacimiento=$rq->fec_nac;
        $sexo=$rq->sexo;
        $direccion=$rq->dir;
        $idDistrito=$rq->dist;
        $telefono=$rq->telf;

        DB::insert("
            insert into persona (nombre,ap_paterno,ap_materno,fecNac,DNI,direccion,sexo,telefono,estado,fechaAdd,fechaUpdate,idDist_Fk)
            values (:nom,:ap,:am,:fn,:dni,:dir,:sexo,:telf,0,:fecAdd,:fecUp,:idDist)
        ",array("nom"=>$nombres,"ap"=>$ap_parteno,"am"=>$ap_marteno,"fn"=>$fecha_nacimiento,"dni"=>$dni,"dir"=>$direccion,"sexo"=>$sexo,"telf"=>$telefono,"fecAdd"=>$fecha,"fecUp"=>$fecha,"idDist"=>$idDistrito));
        return "ok";
    }

    public static function selectIdPersona(Request $rq,$fecha){
        $dni=$rq->dni;
        $fecha_nacimiento=$rq->fec_nac;
        return DB::select(DB::raw("
            select idPersona
            from persona 
            where DNI=:dni
            and fecNac=:fn
            and fechaAdd=:fecAdd
        "),array("fn"=>$fecha_nacimiento,"dni"=>$dni,"fecAdd"=>$fecha));
    
    }
}
