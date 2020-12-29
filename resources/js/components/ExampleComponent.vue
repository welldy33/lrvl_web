<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{header}}</div>

                    <div class="card-body">
                        I'm an example component. sadds Hello
                        <button @click="changetext" class="btn btn-primary">Change Text</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                header:"THis My First Vue + Laravel"
            }
        },
        methods: {
          changetext(){
              this.header="Button Changes me" 
          }  
        },
        mounted() {
            console.log('Component mounteddddddddddddddddd.');
        }
    }
</script>
