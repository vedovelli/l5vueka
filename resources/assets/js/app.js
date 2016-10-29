
window.jQuery = window.$ = require('jquery')
require('bootstrap-sass')

import Vue from 'vue'

import PrimeiroComponente from './app/components/primeiro-componente.vue'
import VdUsers from './app/users/main.vue'

new Vue({
    el: '#app',
    components: {
        PrimeiroComponente,
        VdUsers
    }
})