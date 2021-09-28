 <template>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
         <div class="card">
             <div class="card-header"><h4>Guardar Cuadro</h4></div>
         </div>
         <div class="card-body">
             <form @submit.prevent="crear()">
                 <div class="row">
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Nombre Cuadro</label>
                             <input type="text" class="form-control" v-model="picture.name">
                         </div> 
                     </div>
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Valor</label>
                             <input type="number" class="form-control" v-model="picture.value">
                         </div> 
                     </div>
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Autor</label>
                             <input type="text" class="form-control" v-model="picture.author">
                         </div> 
                     </div> 
                     <div class="col-12 mb-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                     </div>          
                </div>
            </form>
         </div>
        </div>
        </div>
     </div>
 </template>

 <script>
 
  export default {
     name:"crear-picture",

    data(){
        return{
            picture:{
                name:"",
                author:"",
                value:"0.0"
            },
            shopID:this.$route.params.id
        }
    },
    mounted(){

    },
    methods: {
     async crear(){
        await this.axios.post('/api/shops/'+this.shopID+'/pictures', this.picture)
            .then(response=>{
                this.$router.push({name:"mostrarCuadres"},  this.shopID)
            })
            .catch(error=>{console.log(error)})
        }
    }
 }
 </script>
 