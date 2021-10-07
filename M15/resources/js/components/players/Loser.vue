<template>
    <div class="container">
    <div class="row">
        <h1>Lo sentimos <span v-if="loser.loser.name" class="text-danger">{{loser.loser.name}}</span><span v-else class="text-danger">Anónimo</span>.</h1>

        <h2>Tu record en {{loser.loser.total_games}} partidas es de {{loser.awl}} %...</h2>

         <div class="container">
        <img src="/img/loser.gif" style="margin-left:6%" width=40%></div>
    </div>
    </div>
</template>

<script>
export default {
    name:"loser",

    data() {
        return{
            loser:{}
        }
    },
    mounted(){
        this.mostrarloser()
    },
    methods:{
       async mostrarloser(){
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/players/ranking/loser')
                .then(response=>{
                    this.loser=response.data
                    })
                    .catch(error=>{
                        this.loser = []
                        console.log(error)
                    })
        },
        
    }
} 
</script>