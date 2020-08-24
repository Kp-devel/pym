<template>
    <div>
        <div  class="modal" tabindex="-1" role="dialog" id="modalCarga">
            <div class="d-flex justify-content-center">
                <div class="text-center" v-if="viewCarga">
                    <div class="clearfix">
                        <div class="spinner-border text-orange" style="width: 3rem; height: 3rem;" role="status">
                            <span class="sr-only">Cargando...</span>
                        </div>
                    </div>
                    <p class="font-25 text-white">Registrando datos...</p>
                </div>
                <div class="text-center" v-else>
                    <i class="fa fa-check-circle fa-4x text-orange fadeInZoom mb-3"></i><br>
                    <b class="font-20 text-white">¡Ya eres parte de Mercadito!</b><br>
                    <p class="mb-0 font-20 text-white">Bienvenido(a) {{nombres}}</p>
                    <p class="text-white">En unos segundos te redireccionaremos para que accedas a nuestra platafoma</p>
                </div>
            </div>
        </div>              
    </div>
</template>

<script>
    export default {
        props:["viewCarga","icono","msj1","msj2","nombres"],
        data() {
            return {
                
            }
        },
        methods:{
            
        } 
    }
</script>
