
window.jQuery = window.$ = require('jquery')
require('bootstrap-sass')

import Vue from 'vue'
import VueResource from 'vue-resource'

import PrimeiroComponente from './app/components/primeiro-componente.vue'
import VdUsers from './app/users/main.vue'

Vue.use(VueResource)

new Vue({
    el: '#app',
    components: {
        PrimeiroComponente,
        VdUsers
    }
})