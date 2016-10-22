
window.jQuery = window.$ = require('jquery')
require('bootstrap-sass')

import Vue from 'vue'

import PrimeiroComponente from './app/components/primeiro-componente.vue'

new Vue({
    el: '#app',
    components: {
        PrimeiroComponente
    }
})