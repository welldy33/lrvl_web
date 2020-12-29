<template>
    <div>
        <Navbar id="nav" :tmsg="fields" />
        <SideBar/>
            <Content>
                <template v-slot:links>
                    <router-view/>
                </template>
            </Content>
        <Footer/>
     </div>
</template>
<script>
import Navbar from './Navbar.vue'
import SideBar from './SideBar.vue'
import Footer from './Footer.vue'
import Content from './Content.vue'
export default {
    components:{Navbar,SideBar,Footer,Content},
    data() {
        return {
            fields:[]
        }
    },
}
</script>