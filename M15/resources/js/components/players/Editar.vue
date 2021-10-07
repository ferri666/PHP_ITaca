<template>
    <form @submit.prevent="editar()" class="form-signin col-7">

      <h1 class="h3 mb-3 font-weight-normal">Edit your name</h1>
      <label for="name" class="sr-only">Name</label>
      <input type="text" v-model="player.name" id="name" class="form-control">
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>

export default{
  
  name:"editar-player",

    data() {
        return{
            player:{
              name: ""
            },
            playerID: this.$route.params.id
        }
    },
    mounted(){
      this.mostrarPlayer()
    },
    methods:{
      async mostrarPlayer(){
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/players/'+this.playerID)
                .then(response=>{
                    this.player=response.data
                    })
                    .catch(error=>{
                        this.players = []
                        console.log(error)
                    })
        },
       async editar(){
         axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.put('/api/players/'+this.playerID, this.player)
                .then(response=>{
                     this.$router.push({name:"mostrarPlayers"})
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
    }
} 
</script>