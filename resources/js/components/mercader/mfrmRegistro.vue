<template>
    <div >
        <div class="row mx-0">
            <div class="col-md-6">
                <div class="mx-5 ">
                    <div class="py-5">
                        <b class="font-18"><i class="fa fa-shopping-basket fa-lg pr-2 text-orange"></i>Mercadito</b>
                    </div>
                    <div class="pt-2 pb-4">
                        <div class="px-4" v-if="viewPanel">
                            <h2 class="title pb-3">¡Bienvenido(a)!</h2>    
                            <p class="font-16 text-justify">
                                Bienvenido si eres una persona que trabaja haciendo taxi o 
                                tiene movilidad propia y tienes tiempo disponible y quieres 
                                generara más ingresos, inscríbete con nosotros forma parte 
                                de nuestro servicio de mercader y traslado de productos Regístrate!
                            </p>
                            <a href="" @click.prevent="viewPanel=false;viewPanel1=true" class="btn btn-orange rounded shadow mt-2 px-3 font-18">Empezar</a>
                        </div>
                        <div class="px-4" v-if="viewPanel1">
                             <h3 class="title">¡Queremos conocerte!</h3>
                             <p >Brinda tus datos personales para que formes parte de nuestro equipo.</p>  
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">DNI</label>
                                        <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Nombre(s)</label>
                                        <input type="text" class="form-control">
                                    </div> 
                                 </div>
                             </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="">Apellido Paterno</label>
                                            <input type="text" class="form-control">
                                        </div> 
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="">Apellido Materno</label>
                                            <input type="text" class="form-control">
                                        </div>
                                  </div>
                              </div>                          
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" class="form-control">
                            </div> 
                            <a href="" @click.prevent="viewPanel=true; viewPanel1=false" class="btn btn-white rounded shadow mt-2 px-3 ">Inicio</a>
                            <a href="" @click.prevent="viewPanel2=true; viewPanel1=false" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                        <div class="px-4" v-if="viewPanel2">
                             <h3 class="title">¡Queremos ubicarte!</h3>
                             <p >Ingresa tus datos para que los clientes puedan contactarte.</p>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Departamento</label>
                                        <select name="" class="form-control">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Provincia</label>
                                        <select name="" class="form-control">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div> 
                                 </div>
                                 <div class="col-md-4">
                                      <div class="form-group">
                                            <label for="">Distrito</label>
                                            <select name="" class="form-control">
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div> 
                                  </div>
                             </div>
                             <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control">
                            </div>       
                            <div class="form-group">
                                <label for="">Télefono o Celular</label>
                                <input type="text" class="form-control">
                                <small>Ejm:074xxxxxx</small>
                            </div> 
                            <a href="" @click.prevent="viewPanel1=true; viewPanel2=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="viewPanel2=false; viewPanel3=true" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                         <div class="px-4 pb-5" v-if="viewPanel3">
                            <h3 class="title">!Queremos conocer tu vehículo!</h3>
                            <p >Brinda información sobre tu vehiculo y servicio de transporte.</p>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Nº de Placa</label>
                                        <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Tipo de Vehiculo</label>
                                        <select name="" class="form-control">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Categoría de Brevete</label>
                                        <select name="" class="form-control">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                 </div>
                             </div>
                            <div class="form-group">
                                <label for="">Descripción de Transportista(a)</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div> 
                            <a href="" @click.prevent="viewPanel2=true; viewPanel3=false" class="btn btn-white rounded shadow mt-2 px-3">Anterior</a>
                            <a href="" @click.prevent="viewPanel3=false; viewPanel4=true" class="btn btn-orange rounded shadow mt-2 px-3">Siguiente</a>
                        </div>
                        <div class="px-4" v-if="viewPanel4">
                             <h3 class="title">¡Gana dinero y presencia por el servicio que ofreces!</h3>
                             <p >Brinda un número de cuenta para realizar el deposito de tus ganancias.</p>
                             <div class="form-group">
                                <label for="">Aceptamos</label>
                                <div>
                                    <img :src="'../img/visa.png'" alt="" width="55">
                                    <img :src="'../img/mastercad.png'" alt="" width="55">
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="">Nº de Tarjeta</label>
                                <input type="text" class="form-control">
                            </div> 
                            <a href="" @click.prevent="viewPanel3=true; viewPanel4=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="viewPanel4=false; viewPanel5=true" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                        <div class="px-4" v-if="viewPanel5">
                            <h3 class="title">¡Estás a punto de formar parte de Mercadito!</h3>
                            <p >Crea una cuenta en nuestra plataforma para empezar a brindar tus servicios de transporte.</p>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">**</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Confirmar contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">**</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>  
                            </div> 
                             
                            <a href="" @click.prevent="viewPanel4=true; viewPanel5=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="" class="btn btn-orange rounded shadow mt-2 px-3 ">Registrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 vh-100">
                <div class="d-flex justify-content-center align-items-center pt-5 d-none d-sm-none d-md-block">
                    <img :src="'../img/img1.png'" alt="Bienvenidos" class="pt-5">
                </div>
            </div>
        </div>               
    </div>
</template>

<script>

    export default {
        data() {
            return {
                viewPanel:true,
                viewPanel1:false,
                viewPanel2:false,
                viewPanel3:false,
                viewPanel4:false,
                viewPanel5:false,
            }
        },
        created(){
        //    axios.get('listNegocios').then(res=>{
        //         if(res.data){
        //             this.datos=res.data;
        //         }
        //     })
        },
        methods:{
            
        },
        components: {
            // vuePaginate
        }    
    }
</script>
