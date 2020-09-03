<template>
    <div >
        <div class="row mx-0">
            <div class="col-md-6">
                <div class="mx-5 ">
                    <div class="py-5">
                        <b class="font-18"><i class="fa fa-shopping-basket fa-lg pr-2 text-orange"></i>Mercadito</b>
                    </div>
                    <div class="pb-4">
                        <!-- frm1 -->
                        <div class="px-4" v-if="viewPanel">
                            <h2 class="title pb-3">¡Bienvenido(a)!</h2>    
                            <p class="font-16 text-justify">Obtén tu TIENDA VIRTUAL completamente GRATIS, y forma parte de nuestra familia de Proveedores nacionales 
                            en Productos de Primera necesidad.</p>
                            <p>Si eres comerciante de un centro de abastos y quieres:</p>
                            <ul class="font-16 text-justify">
                                <li>Aumentar tus ventas.</li>
                                <li>Crecer como comerciante.</li>
                                <li>Recibir capacitaciones constantes sobre como aumentar tus utilidades.</li>
                            </ul>
                            <p class="font-16 text-justify">
                                ¡No esperes más! ¡Únete a nosotros, Mercadito Nacional! ¡Donde el comerciante peruano, crecerá!
                            </p>
                            <p class="font-16 text-justify">
                                ¡Inscríbete en el siguiente formulario para que tus futuros clientes te conozcan y puedan adquirir 
                                tus productos de primera necesidad!
                            </p>
                            <a href="" @click.prevent="viewPanel=false;viewPanel1=true" class="btn btn-orange rounded shadow mt-2 px-3 ">Empezar</a>
                        </div>
                        <!-- frm2 -->
                        <div class="px-4" v-if="viewPanel1">
                             <h3 class="title">¡Queremos conocerte!</h3>
                             <p >Brinda tus datos personales para que formes parte de nuestro equipo.</p>  
                             <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="">Apellido Paterno</label>
                                            <input type="text" class="form-control" v-model.trim="datos.ap_paterno" @keypress="soloLetras">
                                            <small class="text-danger" v-if="mensajes.ap_paterno">{{mensajes.ap_paterno}}</small>
                                        </div> 
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="">Apellido Materno</label>
                                            <input type="text" class="form-control" v-model.trim="datos.ap_materno" @keypress="soloLetras">
                                            <small class="text-danger" v-if="mensajes.ap_materno">{{mensajes.ap_materno}}</small>
                                        </div>
                                  </div>
                              </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Nombre(s)</label>
                                        <input type="text" class="form-control" v-model.trim="datos.nombres" @keypress="soloLetras">
                                        <small class="text-danger" v-if="mensajes.nombres">{{mensajes.nombres}}</small>
                                    </div> 
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">DNI</label>
                                        <input type="text" class="form-control" v-model="datos.dni" maxlength="8" @keypress="soloNumeros" >
                                        <small class="text-danger" v-if="mensajes.dni">{{mensajes.dni}}</small>
                                    </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" v-model="datos.fec_nac" min="1990-01-01">
                                        <small class="text-danger" v-if="mensajes.fec_nac">{{mensajes.fec_nac}}</small>
                                    </div>  
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Sexo</label>
                                        <select title="Seleccionar" class="form-control" id="sexo" v-model="datos.sexo">
                                            <option value="">Seleccionar</option>
                                            <option value="1">Mujer</option>
                                            <option value="2">Hombre</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.dni">{{mensajes.sexo}}</small>
                                    </div>
                                 </div>
                             </div>
                            <a href="" @click.prevent="viewPanel=true; viewPanel1=false" class="btn btn-white rounded shadow mt-2 px-3 ">Inicio</a>
                            <a href="" @click.prevent="continuar_1()" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                        <!-- frm3 -->
                        <div class="px-4" v-if="viewPanel2">
                             <h3 class="title">¡Queremos ubicarte!</h3>
                             <p >Ingresa tus datos para que los clientes puedan contactarte.</p>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Departamento</label>
                                        <select class="form-control" title="Seleccionar" id="dep" v-model="datos.dep" @change="listProvincias(datos.dep)">
                                            <option value="">Seleccionar</option>
                                            <option  v-for="(item, index) in departamentos" :key="index" :value="item.id">{{item.dep}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.dep">{{mensajes.dep}}</small>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Provincia</label>
                                        <select title="Seleccionar" class="form-control" id="prov" v-model="datos.prov" @change="listDistrito(datos.prov)">
                                            <option value="">Seleccionar</option>
                                            <option  v-for="(item, index) in provincias" :key="index" :value="item.id">{{item.prov}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.prov">{{mensajes.prov}}</small>
                                    </div> 
                                 </div>
                                 <div class="col-md-4">
                                      <div class="form-group">
                                            <label for="">Distrito</label>
                                            <select title="Seleccionar" class="form-control" id="dist" v-model="datos.dist">
                                                <option value="">Seleccionar</option>
                                                <option  v-for="(item, index) in distritos" :key="index" :value="item.id">{{item.dist}}</option>
                                            </select>
                                            <small class="text-danger" v-if="mensajes.dist">{{mensajes.dist}}</small>
                                        </div> 
                                  </div>
                             </div>
                             <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control" v-model.trim="datos.dir">
                                <small class="text-danger" v-if="mensajes.dir">{{mensajes.dir}}</small>
                            </div>       
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Télefono o Celular</label>
                                        <input type="text" class="form-control" v-model="datos.telf" maxlength="9" @keypress="soloNumeros">
                                        <small class="text-danger" v-if="mensajes.telf">{{mensajes.telf}}</small>
                                    </div>
                                </div>
                            </div> 
                            <a href="" @click.prevent="viewPanel1=true; viewPanel2=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="continuar_2()" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                        <!-- frm4 -->
                         <div class="px-4 pb-5" v-if="viewPanel3">
                            <h3 class="title">!Queremos conocer tu negocio!</h3>
                            <p >Brinda información sobre tu negocio para que los clientes puedan ubicarte y recomendarte.</p>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">RUC</label>
                                        <input type="text" class="form-control" v-model="datos.ruc" maxlength="11" @keypress="soloNumeros">
                                        <small class="text-danger" v-if="mensajes.ruc">{{mensajes.ruc}}</small>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Rubro de Negocio</label>
                                        <select class="form-control" v-model="datos.rubro">
                                            <option value="">Seleccionar</option>
                                            <option v-for="(item,index) in categorias" :key="index" :value="item.id">{{item.categoria}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.rubro">{{mensajes.rubro}}</small>
                                    </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                <label for="">Razón Social</label>
                                <input type="text" class="form-control" v-model.trim="datos.razon_social">
                                <small class="text-danger" v-if="mensajes.razon_social">{{mensajes.razon_social}}</small>
                             </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Departamento</label>
                                        <select title="Seleccionar" class="form-control" v-model="datos.v_dep" @change="listProvincias(datos.v_dep)">
                                            <option value="">Seleccionar</option>
                                            <option  v-for="(item, index) in departamentos" :key="index" :value="item.id">{{item.dep}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.v_dep">{{mensajes.v_dep}}</small>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="">Provincia</label>
                                        <select title="Seleccionar" class="form-control" v-model="datos.v_prov" @change="listDistrito(datos.v_prov)">
                                            <option value="">Seleccionar</option>
                                             <option  v-for="(item, index) in provincias" :key="index" :value="item.id">{{item.prov}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.v_prov">{{mensajes.v_prov}}</small>
                                    </div> 
                                 </div>
                                 <div class="col-md-4">
                                      <div class="form-group">
                                            <label for="">Distrito</label>
                                            <select title="Seleccionar" class="form-control" v-model="datos.v_dist" @change="listaMercados(datos.v_dist)">
                                                <option value="">Seleccionar</option>
                                                <option  v-for="(item, index) in distritos" :key="index" :value="item.id">{{item.dist}}</option>
                                            </select>
                                            <small class="text-danger" v-if="mensajes.v_dist">{{mensajes.v_dist}}</small>
                                        </div> 
                                  </div>
                             </div>
                             <div class="form-group">
                                <label for="">Dirección de Venta</label>
                                <input type="text" class="form-control" v-model.trim="datos.v_dir">
                                <small class="text-danger" v-if="mensajes.v_dir">{{mensajes.v_dir}}</small>
                            </div>
                            <div class="form-group">
                                <label for="">Referencia</label>
                                <input type="text" class="form-control" v-model.trim="datos.v_referencia">
                                <small class="text-danger" v-if="mensajes.v_referencia">{{mensajes.v_referencia}}</small>
                            </div>       
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="">Centro de Abastos (Mercado)</label>
                                        <select title="Seleccionar" class="form-control" v-model.trim="datos.centro_trab" @change="listaSectoresMercados(datos.centro_trab)">
                                            <option value="">Seleccionar</option>
                                            <option v-for="(item,index) in mercados" :key="index" :value="item.id">{{item.mercado}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.centro_trab">{{mensajes.centro_trab}}</small>
                                    </div> 
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group" v-if="mercados_sectores!=''">
                                        <label for="">Sector (Mercado)</label>
                                        <select title="Seleccionar" class="form-control" v-model.trim="datos.centro_trab_sector">
                                            <option value="">Seleccionar</option>
                                            <option v-for="(item,index) in mercados_sectores" :key="index" :value="item.id">{{item.sector}}</option>
                                        </select>
                                        <small class="text-danger" v-if="mensajes.centro_trab_sector">{{mensajes.centro_trab_sector}}</small>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Descripción de Vendedor(a) (opcional)</label>
                                <textarea class="form-control" rows="3" v-model.trim="datos.descripcion" maxlength="255"></textarea>
                                <small>Máx. 255 caractéres</small>
                                <small class="text-danger" v-if="mensajes.descripcion">{{mensajes.descripcion}}</small>
                            </div> 
                            <a href="" @click.prevent="viewPanel2=true; viewPanel3=false" class="btn btn-white rounded shadow mt-2 px-3">Anterior</a>
                            <a href="" @click.prevent="continuar_3()" class="btn btn-orange rounded shadow mt-2 px-3">Siguiente</a>
                        </div>
                        <!-- frm5 -->
                        <div class="px-4" v-if="viewPanel4">
                            <h3 class="title">¡Configura tu acceso a Mercadito!</h3>
                            <p >Crea una cuenta en nuestra plataforma para empezar a vender tus productos por internet.</p>
                            <div class="form-group mb-3">
                                <label for="">Correo Electrónico</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" v-model.trim="datos.correo">
                                </div>
                                <small class="text-danger" v-if="mensajes.correo">{{mensajes.correo}}</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">**</span>
                                    </div>
                                    <input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" v-model.trim="datos.contraseña">
                                </div>
                                <small class="text-danger" v-if="mensajes.contraseña">{{mensajes.contraseña}}</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirmar contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">**</span>
                                    </div>
                                    <input type="password" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" v-model.trim="datos.contraseña_dos">
                                </div>  
                                <small class="text-danger" v-if="mensajes.contraseña_dos">{{mensajes.contraseña_dos}}</small>
                            </div> 
                            <a href="" @click.prevent="viewPanel3=true; viewPanel4=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="continuar_4()" class="btn btn-orange rounded shadow mt-2 px-3 ">Siguiente</a>
                        </div>
                        <!-- frm6 -->
                        <div class="px-4" v-if="viewPanel5">
                             <h3 class="title">¡Estás a punto de crear tu inscripción en Mercadito Nacional!</h3>
                             <p class="font-16 text-justify">En caso necesites ayuda, o tengas consultas: ¡No dudes en comunicarte con nosotros!</p> 
                             <p class="font-16 text-justify">Estaremos encantados de apoyarte. Iremos a tu centro de labores a capacitarte y a resolver cualquiera de tus inquietudes. 
                                ¡Formalizarás tu pequeño o mediano negocio!</p>
                             <p class="font-16 text-justify">Llámanos al: <b>970093080</b> (Whatsapp), escríbenos al mail <a href="#">soporte@mercaditonacional.pe</a>,
                                 o déjanos un mensaje.</p>
                            <div class="text-center mb-5">
                                <a href="" class="btn btn-outline-orange rounded px-3">Dejar un mensaje</a>
                            </div>
                            <a href="" @click.prevent="viewPanel4=true; viewPanel5=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                            <a href="" @click.prevent="registrar()" class="btn btn-orange rounded shadow mt-2 px-3 ">Registrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 vh-100 ">
                <div class="d-flex justify-content-center align-items-center pt-5 d-none d-sm-none d-md-block">
                    <img :src="'../img/img1.png'" alt="Bienvenidos" class="pt-5">
                </div>
            </div>
        </div>     
        
        <!-- modalCarga  -->
        <ModalCargaRegistro :viewCarga="viewCarga" :nombres="datos.nombres"/>
    </div>
</template>

<script>
    import ModalCargaRegistro from '../ModalCarga/modalCargaRegistro.vue'
    export default {
        data() {
            return {
                viewPanel:true,
                viewPanel1:false,
                viewPanel2:false,
                viewPanel3:false,
                viewPanel4:false,
                viewPanel5:false,
                viewCarga:true,
                departamentos:[],
                provincias:[],
                distritos:[],
                mercados:[],
                mercados_sectores:[],
                categorias:[],
                cont:0,
                mensajes:{dni:'',nombres:'',ap_paterno:'',ap_materno:'',fec_nac:'',sexo:'',
                            dep:'',prov:'',dist:'',dir:'',telf:'',
                            ruc:'',rubro:'',razon_social:'',v_dep:'',v_prov:'',v_dist:'',v_dir:'',v_referencia:'',centro_trab:'',descripcion:'',
                            centro_trab_sector:'',
                            correo:'',contraseña:'',contraseña_dos:''},
                datos:{dni:'',nombres:'',ap_paterno:'',ap_materno:'',fec_nac:'',sexo:'',
                       dep:'',prov:'',dist:'',dir:'',telf:'',
                       ruc:'',rubro:'',razon_social:'',v_dep:'',v_prov:'',v_dist:'',v_dir:'',v_referencia:'',centro_trab:'',descripcion:'',
                       centro_trab_sector:'',
                       correo:'',contraseña:'',contraseña_dos:''}
            }
        },
        created(){
            this.listDepartamentos();
            this.listaCategorias();
        },
        methods:{
            continuar_1(){
                this.limpiarMensajes();
                if(this.datos.dni!="" && this.datos.ap_paterno!="" && this.datos.ap_materno!="" && this.datos.nombres!="" && this.datos.fec_nac!="" && this.datos.sexo!=""){
                    if(((this.datos.dni).toString()).length==8){
                        if(this.datos.fec_nac>="1990-01-01"){
                            axios.get("validacion/validarDni/"+this.datos.dni).then(res=>{
                                if(res.data){
                                    const resp= res.data;
                                    if(resp[0].cant==0){
                                        this.viewPanel2=true; 
                                        this.viewPanel1=false;
                                    }else{
                                        this.mensajes.dni="El DNI ingresado ya existe";
                                    }
                                }
                            })
                        }else{        
                            this.mensajes.fec_nac="Fecha Mínima:1990-01-01"
                        }
                    }else{
                        this.mensajes.dni="Este campo debe de contener 8 dígitos";
                    }
                }else{
                    if(this.datos.dni==""){
                        this.mensajes.dni="Completar el campo";
                    }
                    if(this.datos.nombres==""){
                        this.mensajes.nombres="Completar el campo"
                    }
                    if(this.datos.ap_paterno==""){
                        this.mensajes.ap_paterno="Completar el campo"
                    }    
                    if(this.datos.ap_materno==""){
                        this.mensajes.ap_materno="Completar el campo"
                    }
                    if(this.datos.fec_nac==""){
                        this.mensajes.fec_nac="Seleccionar una fecha"
                    }
                    if(this.datos.sexo==""){
                        this.mensajes.sexo="Completar el campo"
                    }
                }  
            },
            continuar_2(){
                this.limpiarMensajes();
                if(this.datos.dep!='' && this.datos.prov!='' && this.datos.dist!='' && this.datos.dir!="" && this.datos.telf!="" ){
                    if(this.datos.telf.substr(0,1)==0 || this.datos.telf.substr(0,1)==9 ){
                        if((this.datos.telf).toString().length==9){
                            this.mensajes.telf="";
                            this.viewPanel2=false; 
                            this.viewPanel3=true
                        }else{
                            this.mensajes.telf="Este campo debe de contener 9 dígitos";
                        }
                    }else{
                        this.mensajes.telf="El número ingresado debe de empezar con 0 o 9";
                    }
                }else{
                    if(this.datos.dep==''){
                        this.mensajes.dep="Completar el campo"
                    }
                    if(this.datos.prov==''){
                        this.mensajes.prov="Completar el campo"
                    }
                    if(this.datos.dist==''){
                        this.mensajes.dist="Completar el campo"
                    }    
                    if(this.datos.dir==""){
                        this.mensajes.dir="Completar el campo"
                    }
                    if(this.datos.telf==""){
                        this.mensajes.telf="Completar el campo";
                    }else{
                        if(parseInt(this.datos.telf.substr(0,1))==0 || parseInt(this.datos.telf.substr(0,1))==9 ){
                            if((this.datos.telf).toString().length==9){
                                this.mensajes.telf="";
                            }else{
                                this.mensajes.telf="Este campo debe de contener 9 dígitos";
                            }
                        }else{
                            this.mensajes.telf="El número ingresado debe de empezar con 0 o 9"
                        }
                    }    
                }  
            },
            continuar_3(){
                this.limpiarMensajes();
                if(this.datos.ruc!="" && this.datos.rubro!="" && this.datos.razon_social!="" && this.datos.v_dep!="" && this.datos.v_prov!="" && this.datos.v_dist!="" && this.datos.v_dir!="" && this.datos.centro_trab!=""){
                   if((this.datos.ruc).toString().length==11){
                       axios.get("validacion/validarRuc/"+this.datos.ruc).then(res=>{
                            if(res.data){
                                const resp= res.data;
                                if(resp[0].cant==0){
                                    this.viewPanel3=false; 
                                    this.viewPanel4=true;
                                }else{
                                    this.mensajes.ruc="El RUC ingresado ya existe";
                                }
                            }
                        })
                   }else{
                       this.mensajes.ruc="Este campo debe de contener 11 dígitos";
                   }
                }else{
                    if(this.datos.ruc==""){
                        this.mensajes.ruc="Completar el campo";
                    }else{
                        if((this.datos.ruc).toString().length==11){
                            this.mensajes.ruc="";
                        }else{
                            this.mensajes.ruc="Este campo debe de contener 11 dígitos";
                        }
                    }
                    if(this.datos.rubro==""){
                        this.mensajes.rubro="Completar el campo";
                    }
                    if(this.datos.razon_social==""){
                        this.mensajes.razon_social="Completar el campo";
                    }    
                    if(this.datos.v_dep==""){
                        this.mensajes.v_dep="Completar el campo";
                    }
                    if(this.datos.v_prov==""){
                        this.mensajes.v_prov="Completar el campo";
                    }  
                    if(this.datos.v_dist==""){
                        this.mensajes.v_dist="Completar el campo";
                    }    
                    if(this.datos.v_dir==""){
                        this.mensajes.v_dir="Completar el campo";
                    }
                    if(this.datos.centro_trab==""){
                        this.mensajes.centro_trab="Completar el campo";
                    }
                }  
            },
            continuar_4(){
                this.limpiarMensajes();
                if(this.datos.correo!="" && this.datos.contraseña!="" && this.datos.contraseña_dos!=""){
                    if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(this.datos.correo)){
                        if(this.datos.contraseña==this.datos.contraseña_dos){
                            this.viewPanel4=false;
                            this.viewPanel5=true;
                        }else{
                            this.mensajes.contraseña_dos="Los datos no coiciden";
                        }
                    }else{
                        this.mensajes.correo="La dirección de correo no es válida";
                    }
                }else{
                    if(this.datos.correo==""){
                        this.mensajes.correo="Completar el campo";
                    }
                    if(this.datos.contraseña==""){
                        this.mensajes.contraseña="Completar el campo";
                    }
                    if(this.datos.contraseña_dos==""){
                        this.mensajes.contraseña_dos="Completar el campo";
                    }
                }  
            },
            registrar(){
                this.limpiarMensajes();
                $('#modalCarga').modal({backdrop: 'static', keyboard: false});
                this.viewCarga=true;
                // enviar datos al controlador
                axios.post("registro/insertProveedor",this.datos).then(res=>{
                    if(res.data=="ok"){
                            this.viewCarga=false;
                            setTimeout(() => {
                                window.location.href = "../login";
                            }, 1500);
                    }
                })
            },
            listDepartamentos(){
                axios.get("ubigeo/departamentos").then(res=>{
                    if(res.data){
                        this.departamentos= res.data;
                    }
                })
            },
            listProvincias(id){
                this.provincias="";
                this.distritos="";
                axios.get("ubigeo/provincias/"+id).then(res=>{
                    if(res.data){
                        this.provincias= res.data;
                    }
                })
            },
            listDistrito(id){
                axios.get("ubigeo/distritos/"+id).then(res=>{
                    if(res.data){
                        this.distritos= res.data;
                    }
                })
            },
            limpiarMensajes(){
                this.mensajes={dni:'',nombres:'',ap_paterno:'',ap_materno:'',fec_nac:'',
                            dep:0,prov:0,dist:0,dir:'',telf:'',
                            ruc:'',rubro:'',razon_social:'',v_dep:0,v_prov:0,v_dist:0,v_dir:'',centro_trab:'',descripcion:'',
                            num_tarjeta:'',
                            correo:'',contraseña:'',contraseña_dos:''};
            },
            listaMercados(dist){
                axios.get("mercados/listMercados/"+dist).then(res=>{
                    if(res.data){
                        this.mercados= res.data;
                    }
                })
            },
            listaSectoresMercados(idmercado){
                this.mercados_sectores=[];
                axios.get("mercados/listSectoresMercados/"+idmercado).then(res=>{
                    if(res.data){
                        this.mercados_sectores= res.data;
                    }
                })
            },
            listaCategorias(){
                axios.get("categorias/listCategorias").then(res=>{
                    if(res.data){
                        this.categorias= res.data;
                    }
                })
            },
            soloNumeros(e){
                var key = window.event ? e.which : e.keyCode;
                if (key < 48 || key > 57) {
                    e.preventDefault();
                }
            },
            soloLetras(e){
                var regex = new RegExp("^[a-zA-Z ]+$");
                var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (!regex.test(key)) {
                    e.preventDefault();
                    return false;
                }
            }
        },
        updated(){
        
        },
        components: {
            ModalCargaRegistro
        }    
    }
</script>
