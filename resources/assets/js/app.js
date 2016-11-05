
window.jQuery = window.$ = require('jquery')
require('bootstrap-sass')

import Vue from 'vue'
import axios from 'axios'

import PrimeiroComponente from './app/components/primeiro-componente.vue'
import VdUsers from './app/users/main.vue'

var http = axios.create({
  baseURL: 'http://localhost:8000/api/',
});

Vue.prototype.$http = http

new Vue({
    el: '#app',
    components: {
        PrimeiroComponente,
        VdUsers
    }
})