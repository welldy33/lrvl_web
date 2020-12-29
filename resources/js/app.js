import './bootstrap'
import Vue from 'vue'
import router from './router.js'
import App from './layouts/App.vue'
import axios from 'axios'

const vm= new Vue({
    router,axios,
    el:'#app',
    render(h) {
        return h(App);
    }
});