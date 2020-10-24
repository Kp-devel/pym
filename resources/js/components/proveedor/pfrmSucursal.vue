<template>
    <div>
        <div class="pb-4">
            <!-- frm4 -->
            <div class="pb-5" v-if="viewPanel">
                    <h3 class="titulo">Nueva Sucursal</h3>
                    <p >Registra un nuevo Local y ¡adminístralo de manera eficiente para generar rentabilidad!</p>
                    <!-- <div class="row pt-3">
                        <div class="col-md-3">
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
                   <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Razón Social</label>
                                <input type="text" class="form-control" v-model.trim="datos.razon_social">
                                <small class="text-danger" v-if="mensajes.razon_social">{{mensajes.razon_social}}</small>
                            </div>
                        </div>
                   </div> -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                            <label for="">Departamento</label>
                            <select title="Seleccionar" class="form-control" v-model="datos.v_dep" @change="listProvincias(datos.v_dep)">
                                <option value="">Seleccionar</option>
                                <option  v-for="(item, index) in departamentos" :key="index" :value="item.id">{{item.dep}}</option>
                            </select>
                            <small class="text-danger" v-if="mensajes.v_dep">{{mensajes.v_dep}}</small>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label for="">Provincia</label>
                            <select title="Seleccionar" class="form-control" v-model="datos.v_prov" @change="listDistrito(datos.v_prov)">
                                <option value="">Seleccionar</option>
                                    <option  v-for="(item, index) in provincias" :key="index" :value="item.id">{{item.prov}}</option>
                            </select>
                            <small class="text-danger" v-if="mensajes.v_prov">{{mensajes.v_prov}}</small>
                        </div> 
                        </div>
                        <div class="col-md-3">
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
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Dirección de Venta</label>
                                <input type="text" class="form-control" v-model.trim="datos.v_dir">
                                <small class="text-danger" v-if="mensajes.v_dir">{{mensajes.v_dir}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Referencia</label>
                                <input type="text" class="form-control" v-model.trim="datos.v_referencia">
                                <small class="text-danger" v-if="mensajes.v_referencia">{{mensajes.v_referencia}}</small>
                            </div>  
                        </div>     
                    </div>    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Centro de Abastos (Mercado)</label>
                                <select title="Seleccionar" class="form-control" v-model.trim="datos.centro_trab" @change="listaSectoresMercados(datos.centro_trab)">
                                    <option value="">Seleccionar</option>
                                    <option v-for="(item,index) in mercados" :key="index" :value="item.id">{{item.mercado}}</option>
                                </select>
                                <small class="text-danger" v-if="mensajes.centro_trab">{{mensajes.centro_trab}}</small>
                            </div> 
                        </div>
                        <div class="col-md-3">
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
                    <div class="row">
                        <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Descripción de Vendedor(a) (opcional)</label>
                                    <textarea class="form-control" rows="3" v-model.trim="datos.descripcion" maxlength="255"></textarea>
                                    <small>Máx. 255 caractéres</small>
                                    <small class="text-danger" v-if="mensajes.descripcion">{{mensajes.descripcion}}</small>
                                </div> 
                        </div>
                    </div>
                    <a href="" @click.prevent="continuar_1()" class="btn btn-orange rounded shadow mt-2 px-3">Siguiente</a>
            </div>
            <!-- frm2 -->
            <div class="pb-5" v-if="viewPanel1">
                <h3 class="titulo">Nueva Sucursal</h3>
                <p >¡Deja a cargo tu sucursal al empleado que desees!</p>
                <div class="d-flex flex-wrap pt-1 py-4" style="gap: 8px;">
                    <div class="our-team border">
                        <div class="pic">
                            <img :src="'img/foto.jpg'" class="shadow img-fluid">
                        </div>
                        <div class="team-content px-2">
                            <p class="title">Juana Mendoza Coveñas</p>
                            <p class="post mb-0">18 años</p>
                            <p class="post">942515426</p>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>    
                        </div>
                    </div>
                    <div class="our-team border">
                        <div class="pic ">
                            <img :src="'img/foto.jpg'" class="shadow img-fluid">
                        </div>
                        <div class="team-content px-2">
                            <p class="title">Juana Mendoza Coveñas</p>
                            <p class="post mb-0">18 años</p>
                            <p class="post">942515426</p>
                            <label class="switch">
                                <input type="checkbox" >
                                <span class="slider round"></span>
                            </label> 
                        </div>
                    </div>
                </div>
                <a href="" @click.prevent="viewPanel=true; viewPanel1=false" class="btn btn-white rounded shadow mt-2 px-3 ">Anterior</a>
                <a href="" @click.prevent="registrar()" class="btn btn-orange rounded shadow mt-2 px-3 ">Registrar</a>
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
                viewCarga:true,
                departamentos:[],
                provincias:[],
                distritos:[],
                mercados:[],
                mercados_sectores:[],
                categorias:[],
                cont:0,
                longPass:0,
                catPass:'',
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
            // this.listaCategorias();
        },
        methods:{
            continuar_1(){
                this.limpiarMensajes();
                if(this.datos.v_dep!="" && this.datos.v_prov!="" && this.datos.v_dist!="" && this.datos.v_dir!="" && this.datos.centro_trab!=""){
                //    if((this.datos.ruc).toString().length==11){
                    //    axios.get("validacion/validarRuc/"+this.datos.ruc).then(res=>{
                            // if(res.data){
                                // const resp= res.data;
                                // if(resp[0].cant==0){
                                    this.viewPanel=false; 
                                    this.viewPanel1=true;
                                // }else{
                                    // this.mensajes.ruc="El RUC ingresado ya existe";
                                // }
                            // }
                        // })
                //    }else{
                //        this.mensajes.ruc="Este campo debe de contener 11 dígitos";
                //    }
                }else{
                    // if(this.datos.ruc==""){
                    //     this.mensajes.ruc="Completar el campo";
                    // }else{
                    //     if((this.datos.ruc).toString().length==11){
                    //         this.mensajes.ruc="";
                    //     }else{
                    //         this.mensajes.ruc="Este campo debe de contener 11 dígitos";
                    //     }
                    // }
                    // if(this.datos.rubro==""){
                    //     this.mensajes.rubro="Completar el campo";
                    // }
                    // if(this.datos.razon_social==""){
                    //     this.mensajes.razon_social="Completar el campo";
                    // }    
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
            registrar(){
                this.limpiarMensajes();
                $('#modalCarga').modal({backdrop: 'static', keyboard: false});
                this.viewCarga=true;
                // enviar datos al controlador
                // axios.post("registro/insertProveedor",this.datos).then(res=>{
                //     if(res.data=="ok"){
                //             this.viewCarga=false;
                //             setTimeout(() => {
                //                 window.location.href = "../login";
                //             }, 1500);
                //     }
                // })
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
            // listaCategorias(){
            //     axios.get("categorias/listCategorias").then(res=>{
            //         if(res.data){
            //             this.categorias= res.data;
            //         }
            //     })
            // },
            soloNumeros(e){
                var key = window.event ? e.which : e.keyCode;
                if (key < 48 || key > 57) {
                    e.preventDefault();
                }
            },
            soloLetras(e){
                var regex = new RegExp("^[a-zA-Z ÁÉÍÓÚáéíóú]+$");
                var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (!regex.test(key)) {
                    e.preventDefault();
                    return false;
                }
            },
            validacionPass(){
                var caracteres_especiales='-*?!¿¡@#$/(){}=.,;:';
                var longPass=this.datos.contraseña.length;
                
                if(longPass<8){
                    this.catPass='Baja';
                }
                if(longPass>=8){
                    this.catPass='Media';
                }
                if(longPass>=8){
                    for(var i=0;i<longPass;i++){
                        console.log((this.datos.contraseña).charAt(i));
                         if(caracteres_especiales.indexOf((this.datos.contraseña).charAt(i))>=0){
                            this.catPass='Alta';
                        }
                    }
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
