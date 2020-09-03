<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Puesto extends Model
{
    public static function insertPuesto(Request $rq,$fecha){
        $idDist=$rq->v_dist;
        $direccion=$rq->v_dir;
        $referencia=$rq->v_referencia;
        $descripcion=isset($rq->descripcion)?$rq->descripcion:'';
        $idMercado=$rq->centro_trab;
        $idSector=isset($rq->centro_trab_sector)?$rq->centro_trab_sector:0;

        DB::insert("
            insert into puesto (direccion,descripcion,referencia,estado,idMercado_Fk,idSectorMercado_Fk,fechaAdd,fechaUpdate)
            values (:dir,:des,:ref,0,:idMer,:idSect,:fec,:fecUp)
        ",array("dir"=>$direccion,"des"=>$descripcion,"ref"=>$referencia,"idMer"=>$idMercado,"idSect"=>$idSector,"fec"=>$fecha,"fecUp"=>$fecha));
        
        return "ok";
    }

    public static function selectIdPuesto(Request $rq,$fecha){
        $direccion=$rq->v_dir;
        $idMercado=$rq->centro_trab;
        $idSector=isset($rq->centro_trab_sector)?$rq->centro_trab_sector:0;
        return DB::select(DB::raw("
            select idPuesto
            from puesto 
            where direccion=:dir
            and idMercado_Fk=:idMer
            and idSectorMercado_Fk=:idSect
            and fechaAdd=:fec
        "),array("dir"=>$direccion,"idMer"=>$idMercado,"idSect"=>$idSector,"fec"=>$fecha));
    }

    public static function insertPuestoEmpleado($idEmpleado,$idPuesto){
        DB::insert("
            insert into empleado_puesto (idEmpleado_Fk,idPuesto_Fk)
            values (:idEmp,:idPuesto)
        ",array("idEmp"=>$idEmpleado,"idPuesto"=>$idPuesto));
        return "ok";
    }
}
