 <template>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
         <div class="card">
             <div class="card-header"><h4>Crear Tienda</h4></div>
         </div>
         <div class="card-body">
             <form @submit.prevent="crear">
                 <div class="row">
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Nom Tenda</label>
                             <input type="text" class="form-control" v-model="shop.name">
                         </div> 
                     </div>
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Localitat</label>
                             <input type="text" class="form-control" v-model="shop.location">
                         </div> 
                     </div>
                     <div class="col-12 mb-2">
                         <div class="form-group">
                             <label>Capacitat</label>
                             <input type="number" class="form-control" v-model="shop.capacity">
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
     name:"crear-shop",
    data(){
        return{
            shop:{
                name:"",
                location:"",
                capacity:"0"
            }
        }
    },
    methods: {
      async crear(){
         await this.axios.post('/api/shops', this.shop)
            .then(response=>{
                this.$router.push({name:"mostrarShops"})
            })
            .catch(error=>{console.log(error)})
        }
    }
 }
 </script>
 