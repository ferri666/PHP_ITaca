<template>
<div class="container">
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <router-link :to='{name:"crearCuadre", params: {id: shopID}}' class="btn btn-success">Crear</router-link>
            <button @click="incendiar()" class="btn btn-danger">Incendiar</button>
          </p>
        </div>
      </section>

    
        <div class="container">
           <div class="album py-5 bg-light">
          <div class="row">
           
            <div class="col-md-4" v-for="picture in pictures" :key="picture.id">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="https://thisartworkdoesnotexist.com/" alt="RandomArt" style="height: 225px; width: 100%; display: block;" src="https://thisartworkdoesnotexist.com/" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><h1>{{picture.name}}</h1>
                  <p class="card-text">By <small v-if="picture.author">{{picture.author}}</small><small v-else>Anonymous</small></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">{{picture.value}} €</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</template>


<script>
export default {
    name:"pictures",

    data() {
        return{
            pictures:[],
            shopID:this.$route.params.id
        }
    },
    mounted(){
        this.mostrarPictures()
    },
    methods:{
       async mostrarPictures(){
         axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/shops/'+this.shopID+'/pictures')
                .then(response=>{
                    this.pictures=response.data
                    })
                    .catch(error=>{
                        this.pictures = []
                    })
        },
       incendiar(){
          if (confirm("¿Confirma inciendiar las pruebas?"))
           this.axios.delete('/api/shops/'+this.shopID+'/pictures')
                .then(response=>{
                    this.mostrarPictures()
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
    } 
} 
</script>