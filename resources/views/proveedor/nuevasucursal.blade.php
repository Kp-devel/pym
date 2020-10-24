@extends('proveedor.admin')

@section('panel-contenido')
    <div class="d-flex justify-content-between">
         <div>
             <!-- <p class="titulo mb-0">Nueva Sucursal</p> -->
             <!-- <p >Registra un nuevo Local y ¡adminístralo de manera eficiente para generar rentabilidad!</p> -->
         </div>
         <div>
             <!-- <a href="#" class="icono-bars-2 waves-effect"><i class="fa fa-bell fa-lg"></i></a> -->
             <a href="#" class="icono-bars-2 waves-effect border"><i class="fa fa-power-off fa-lg"></i></a>
         </div>
    </div>
    <!-- contenido -->
    <div style="margin-top:-50px">
        <frm-sucursal/>
    </div>
    
@endsection
