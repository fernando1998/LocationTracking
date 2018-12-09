
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import * as VueGoogleMaps from 'vue2-google-maps';

window.Vue = require('vue');
window.Bus = new Vue;

Vue.use(VueGoogleMaps,{
    load:{
        key : process.env.GOOGLE_MAPS_KEY,
        //AIzaSyA0_U1zBYbQUdjkoW3xs5crieQldp4DORE
        libraries: 'places',
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('tracking-map', require('./components/TrackingMap.vue'));



const app = new Vue({
    el: '#app'
});
