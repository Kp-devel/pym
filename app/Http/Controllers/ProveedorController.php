<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Persona;
use App\Empresa;
use App\Empleado;
use App\Puesto;
use App\Usuario;
use Carbon\Carbon;

class ProveedorController extends Controller
{
    public function insertProveedor(Request $rq){
        $dni=$rq->dni;
        $nombres=$rq->nombres;
        $ap_paterno=$rq->ap_paterno;
        $ap_materno=$rq->ap_materno;
        $fec_nac=$rq->fec_nac;
        $sexo=$rq->sexo;
        $dist=$rq->dist;
        $dir=$rq->dir;
        $telf=$rq->telf;
        $ruc=$rq->ruc;
        $rubro=$rq->rubro;
        $razon_social=$rq->razon_social;
        $v_dist=$rq->v_dist;
        $v_dir=$rq->v_dir;
        $centro_trab=$rq->centro_trab;
        $centro_trab_sector=$rq->centro_trab_sector;
        $correo=$rq->correo;
        $contraseña=$rq->contraseña;
        $contraseña_dos=$rq->contraseña_dos;
        $fecha=Carbon::now();

        if($dni!="" && $nombres!="" && $ap_paterno!="" && $ap_materno!="" && $fec_nac!="" && $dist!="" && $dir!="" && $sexo!="" &&
           $telf!="" && $ruc!="" && $rubro!="" && $razon_social!="" && $v_dist!="" && $v_dir!="" && $centro_trab!="" &&
           $correo!="" && $contraseña!="" && $contraseña_dos!=""){
            // insertar datos
            Persona::insertPersona($rq,$fecha);
            //select idPersona
            $idPersona=Persona::selectIdPersona($rq,$fecha);
            //insertar empresa
            Empresa::insertEmpresa($rq,$fecha);
            //selecionar el id de Empresa
            $idEmpresa=Empresa::selectIdEmpresa($rq,$fecha);
            //insertar a empresa_categoria
            // for($i=0;$i<count($categorias);$i++){
                    
            // }
            //insert usuario
            Usuario::insertUsuario($rq,$fecha,1);
            //seleccionar usuario
            $idUsuario=Usuario::selectIdUsuario($rq,$fecha,1);
            //insert empleado
            Empleado::insertEmpleado($fecha,$idPersona[0]->idPersona,$idEmpresa[0]->idEmpresa,$idUsuario[0]->idUsuario);
            //select idEmpleado
            $idEmpleado=Empleado::selectIdEmpleado($fecha,$idPersona[0]->idPersona,$idEmpresa[0]->idEmpresa,$idUsuario[0]->idUsuario);
            //insertar puesto
            Puesto::insertPuesto($rq,$fecha);
            //select idPuesto
            $idPuesto=Puesto::selectIdPuesto($rq,$fecha);
            //insertar empleado_puesto
            Puesto::insertPuestoEmpleado($idEmpleado[0]->idEmpleado,$idPuesto[0]->idPuesto);
            
            return "ok";
        }
    }
}
