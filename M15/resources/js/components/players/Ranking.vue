<template>
    <div class="container">
    <div class="row">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Nombre</th>
                            <th>AWR</th>
                            <th>Posición</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="(score, index) in scores" :key="score.id">
                            <td><span v-if="score.name">{{score.name}}</span><span v-else>Anónimo</span></td>
                            <td>{{(score.awr).toFixed(2)}}%</td>
                             <td><b v-if="index+1<4">{{index+1}}</b><span v-else>{{index+1}}</span></td>
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
    name:"ranking",

    data() {
        return{
            scores:{},
            dif:[]
        }
    },
    mounted(){
        this.mostrarScores()
       // this.sortedScores()
    },
    methods:{
        async mostrarScores() {
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
               await this.axios.get('/api/players/ranking/show')
                .then(response=>{ 
                    console.log(response.data)
                    this.scores=response.data
                    //this.scores = Array.from(this.scores)
                    //this.scores = this.scores.sort((a, b)=>b.awr - a.awr)
                    })
                    .catch(error=>{
                        this.scores = []
                        console.log(error)
                    })
        }
        
    },
    computed: {
        sortedScores(){
        
        }
    }
} 
</script>