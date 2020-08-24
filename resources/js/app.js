require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('frm-proveedor', require('./components/proveedor/pfrmRegistro.vue').default);
Vue.component('frm-mercader', require('./components/mercader/mfrmRegistro.vue').default);

const app = new Vue({
    el: '#app',
});
