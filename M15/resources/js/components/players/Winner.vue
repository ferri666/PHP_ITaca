<template>
    <div class="container">
    <div class="row">
        <h1>Felicidades <span v-if="winner.winner.name" class="text-success">{{winner.winner.name}}</span><span v-else class="text-success">Anónimo </span>!!!</h1>

        <h2>Tu record en {{winner.winner.total_games}} partidas es del {{winner.awp}} %!</h2>
        <div class="container">
        <img src="/img/win.gif" style="margin-left:6%" width=20%></div>
        
    </div>
    </div>
</template>

<script>
export default {
    name:"winner",

    data() {
        return{
            winner:{}
        }
    },
    mounted(){
        this.mostrarwinner()
        
    },
    methods:{
       async mostrarwinner(){
            axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/players/ranking/winner')
                .then(response=>{
                    this.winner=response.data
                    })
                    .catch(error=>{
                        this.winner = []
                        console.log(error)
                    })
        },
        
    }
} 
</script>