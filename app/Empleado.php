<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Empleado extends Model
{
    public static function insertEmpleado($fecha,$idPersona,$idEmpresa,$idUsuario){    
        DB::insert("
            insert into empleado (cuentaBancaria,estado,fechaAdd,fechaUpdate,idPersona_Fk,idUsuario_Fk,idCatBrevete_Fk,idEmpresa_Fk)
            values('',0,:fec,:fecUp,:idPer,:idUsu,0,:idEmp)
        ",array("fec"=>$fecha,"fecUp"=>$fecha,"idPer"=>$idPersona,"idUsu"=>$idUsuario,"idEmp"=>$idEmpresa));
        return "ok";
    }

    public static function selectIdEmpleado($fecha,$idPersona,$idEmpresa,$idUsuario){
        return DB::select(DB::raw("
            select idEmpleado
            from empleado 
            where fechaAdd=:fec
            and idPersona_Fk=:idPer
            and idUsuario_Fk=:idUsu
            and idEmpresa_Fk=:idEmp
        "),array("fec"=>$fecha,"idPer"=>$idPersona,"idUsu"=>$idUsuario,"idEmp"=>$idEmpresa));
    }
}
