<template>
    <div class="container">
    <div class="row">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Total Games</th>
                            <th>Wins</th>
                            <th>Losses</th>
                            <th>AWP</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="player in players" :key="player.id">
                            <td>{{player.id}}</td>
                            <td><router-link :to='{name:"mostrarGames", params:{id:player.id}}'><span v-if="player.name">{{player.name}}</span><span v-else>Anonymous</span></router-link></td>
                            <td>{{player.total_games}}</td>
                            <td>{{player.total_wins}}</td>
                            <td>{{player.total_loses}}</td>
                            <td><span v-if="player.total_games!=0">{{((player.total_wins*100)/player.total_games).toFixed(2)}}%</span></td>
                            <td><router-link :to='{name:"editarPlayer", params:{id:player.id}}'><i class="fas fa-edit"></i></router-link>
                            <button @click="borrar(player.id)" class="btn-danger" href="#"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

</template>

<script>
export default {
    name:"players",

    data() {
        return{
            players:[],
        }
    },
    mounted(){
        this.mostrarplayers() 
    },
    methods:{
       async mostrarplayers(){
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/players')
                .then(response=>{
                    this.players=response.data
                    })
                    .catch(error=>{
                        this.players = []
                        console.log(error)
                    })
        },
        borrar(id){
          if (confirm("¿Confirma borrar los registros?"))
           this.axios.delete('/api/players/'+id+'/games')
                .then(response=>{
                    this.$router.push({name:"home"})
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
        
    }
} 
</script>