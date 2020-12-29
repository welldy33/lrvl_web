import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/Home.vue'
import About from './views/About.vue'
import LayoutBus from './views/Bus/LayoutBus.vue'
Vue.use(VueRouter)

const router=new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/routevue',
            name:'home',
            component:Home
        },{
            path:'/vueabout',
            name:'about',
            component:About
        }
        ,{
            path:'/buslayout',
            name:'buslayout',
            component:LayoutBus
        }
    ]
})
export default router