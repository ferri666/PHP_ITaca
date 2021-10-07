<template>
    <form @submit.prevent="crear()" class="form-signin col-7">

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="name" class="sr-only">Name</label>
      <input type="text" v-model="player.name" id="name" class="form-control" placeholder="Your Name" autofocus="">
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>

export default{
  
  name:"crear-player",

    data() {
        return{
            player:{
              name:""
            }
        }
    },
    mounted(){
    },
    methods:{
       async crear(){
         axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.post('/api/players', this.player)
                .then(response=>{
                  if(response.data.player.name) localStorage.playername = response.data.player.name
                  else  localStorage.playername = 'Anónimo'
                   localStorage.playerID = response.data.player.id
                     this.$router.push({name:"mostrarPlayers"})
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
    }
} 
</script>