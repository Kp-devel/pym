<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Usuario extends Model
{
    public static function insertUsuario(Request $rq,$fecha,$rol){
        $correo=$rq->correo;
        $pass=bcrypt($rq->contraseña);
        DB::insert("
            insert into usuario(correoElectronico,contraseña,estado,idRol_Fk,fechaAdd,fechaUpdate)
            values(:correo,:pass,0,:rol,:fec,:fecUp)
        ",array("correo"=>$correo,"pass"=>$pass,"rol"=>$rol,"fec"=>$fecha,"fecUp"=>$fecha));
        return "ok";
    }

    public static function selectIdUsuario(Request $rq,$fecha,$rol){
        $correo=$rq->correo;
        return DB::select(DB::raw("
            select idUsuario 
            from usuario 
            where correoElectronico=:correo
            and idRol_Fk=:rol
            and fechaAdd=:fec
        "),array("correo"=>$correo,"rol"=>$rol,"fec"=>$fecha));
    }
}
