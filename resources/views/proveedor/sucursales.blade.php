@extends('proveedor.admin')

@section('panel-contenido')
    <div class="d-flex mb-4 justify-content-between">
         <div>
             <p class="titulo mb-0">Mis Sucursales</p>
             <div class="d-flex">
                 <i class="fa fa-store pt-2"></i>
                 <select class="form-control input-sb" id="" style="width:220px;">
                     <option>Todas las sucursales</option>
                     <option value="">Sucursal Nº 1</option>
                     <option value="">Sucursal Nº 2</option>
                     <option value="">Sucursal Nº 3</option>
                 </select>
             </div>
         </div>
         <div>
             <!-- <a href="#" class="icono-bars-2 waves-effect"><i class="fa fa-bell fa-lg"></i></a> -->
             <a href="#" class="icono-bars-2 waves-effect border"><i class="fa fa-power-off fa-lg"></i></a>
         </div>
    </div>
    <div class="busqueda pt-3 pb-4 d-flex">
        <select class="form-control" id="" style="width:220px;">
                 <option>Ordernar por</option>
                 <option value="">Orden 1</option>
                 <option value="">Orden 2</option>
                 <option value="">Orden 3</option>
        </select>
        <a href="" class="btn-icono"><i class="fa fa-sort-amount-up fa-2x ml-2 mt-1"></i></a>
    </div>
    <div class="table-responsive">
       <table class="table table-hover">
           <thead class="bg-orange text-center ">
               <tr>
                   <td class="align-middle">Puesto</td>
                   <td class="align-middle">Dirección</td>
                   <td class="align-middle">Descripción</td>
                   <td class="align-middle">Referencia</td>
                   <td class="align-middle">Empresa</td>
                   <td class="align-middle">Empleado Asignado</td>
                   <td class="align-middle">Centro de Abastos</td>
                   <td class="align-middle">Sector Mercado</td>
                   <td class="border-0 bg-white"></td>
               </tr>
           </thead>
           <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Alto Alianza #345. Puesto N° 45 –K2</td>
                    <td>Dedicado a la venta de abarrotes para la población Tumaneña.</td>
                    <td>Cerca al busto de Central del Mercado</td>
                    <td>PANADERIA JUAN 3.A</td>
                    <td>DEYBIN GUZMAN</td>
                    <td>Mercado Tumán</td>
                    <td>Sector 2</td>
                    <td class="border-0 text-center">
                        <a href="" class="btn btn-sm btn-hover btn-icono"><i class="fa fa-edit "></i></a>
                        <a href="" class="btn btn-sm btn-hover btn-icono"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Alto Alianza #345. Puesto N° 45 –K2</td>
                    <td>Dedicado a la venta de abarrotes para la población Tumaneña.</td>
                    <td>Cerca al busto de Central del Mercado</td>
                    <td>PANADERIA JUAN 3.A</td>
                    <td>DEYBIN GUZMAN</td>
                    <td>Mercado Tumán</td>
                    <td>Sector 2</td>
                    <td class="border-0 text-center">
                        <a href="" class="btn btn-sm btn-hover btn-icono"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn-hover btn-icono"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
           </tbody>
       </table>
    </div>
@endsection
