<template>
<div class="bus row">
    <div class="col-9" >
        <div v-for="v in row"  :key="v">
            <div class="row">
                <div v-for="k in col" :key="v+k" ref="seat"  @click="$event.target.classList.toggle('setted')" class="seat">{{v+k}}</div>
            </div>
        </div>
    </div>
    <div class="col-3" >
        <button @click="preview" class="btn btn-primary">Preview</button>
    </div>
</div>
</template>
<script>
export default {
    data() {
        return {
            row:[],
            col:[],
            rowQty:15,
            colQty:20,
            data:[],
            char:"A",
            settedSeat:[]
        }
    },
    mounted(){
      //  var items=this.rowb*this.colb; 
        var c=1;
        var rk="A";
        for(var i=1;i<this.rowQty;i++){
            this.row.push(rk);
            rk=this.nextChar(rk);
        }
        for(var i=1;i<this.colQty;i++){
            this.col.push(i);
        }
        this.getData();
    },
    methods: {
        async preview(){
            this.getSetted(this.$refs.seat);
            console.log(this.settedSeat.join(","));
            var obj={
                model_nm:"Hino",
                rowmap:15,
                colmap:20,
                seal:this.settedSeat.join(",")
            }
            axios.post('/api/busapi/save',obj).then(response => {
                console.log(response.data);
            });
        },
        getData(){
             axios.get('/api/busapi').then(response => {
                console.log(response.data);
            });
        },
        getSetted(items){
           for(var i = 0; i < items.length; i++) "seat setted" == items[i].className && this.settedSeat.push(items[i].innerHTML);
        },
        nextChar(chr){
            return chr.substring(0, chr.length - 1)
      + String.fromCharCode(chr.charCodeAt(chr.length - 1) + 1)
        }
    },
}
</script>
<style scoped>
.seat{
    width: 35px;
    height: 35px;
    margin: 5px;
    background-color: brown;
    border: 1px solid black;
    cursor: pointer;
}
.seat:hover{
    background-color: chocolate;
}
.setted{
    background-color: yellow;
}
.bus{
    margin: 10px;
     border: 1px solid black;
}
</style>