<template>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Dado 1</th>
                            <th>Dado 2</th>
                            <th>Total</th>
                            <th>WIN</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="game in games" :key="game.id">
                            <td><svg v-if="game.dau1==1" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-one" class="svg-inline--fa fa-dice-one" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"></path></svg>
        <svg v-if="game.dau1==2" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-two" class="svg-inline--fa fa-dice-two" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau1==3" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-three" class="svg-inline--fa fa-dice-three" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau1==4" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-four" class="svg-inline--fa fa-dice-four" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau1==5" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-five" class="svg-inline--fa fa-dice-five" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau1==6" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-six" class="svg-inline--fa fa-dice-six" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 288C130.4 288 96 273.6 96 216s14.38-32 32-32s32 14.38 32 32S141.6 288 128 288zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        </td>
                            <td><svg v-if="game.dau2==1" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-one" class="svg-inline--fa fa-dice-one" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"></path></svg>
        <svg v-if="game.dau2==2" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-two" class="svg-inline--fa fa-dice-two" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau2==3" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-three" class="svg-inline--fa fa-dice-three" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau2==4" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-four" class="svg-inline--fa fa-dice-four" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau2==5" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-five" class="svg-inline--fa fa-dice-five" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM224 288C206.4 288 192 273.6 192 216s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau2==6" aria-hidden="true" height="30" width="30" focusable="false" data-prefix="fas" data-icon="dice-six" class="svg-inline--fa fa-dice-six" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 112"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 31.38 28.62 64 64 64h320c31.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S141.6 384 128 384zM128 288C130.4 288 96 273.6 96 216s14.38-32 32-32s32 14.38 32 32S141.6 288 128 288zM128 192C130.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S141.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg></td>
                            <td>{{game.dau1+game.dau2}}</td>
                            <td><b v-if="game.win" class="text-success">WIN</b><b v-else class="text-danger">LOSS</b></td>
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
    name:"games",

    data() {
        return{
            games:[],
            playerID:this.$route.params.id,
        }
    },
    mounted(){
        this.mostrargames()
    },
    methods:{
       async mostrargames(){
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
           await this.axios.get('/api/players/'+this.playerID+'/games')
                .then(response=>{
                    this.games=response.data
                    })
                    .catch(error=>{
                        this.games = []
                    })
        },
        
    }
} 
</script>
