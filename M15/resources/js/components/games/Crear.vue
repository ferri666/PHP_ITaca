<template>
    <div>

        <h1 v-if="playername">Bienvenido {{playername}}</h1>
        
        <svg v-if="game.dau1==1" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-one" class="svg-inline--fa fa-dice-one" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"></path></svg>
        <svg v-if="game.dau1==2" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-two" class="svg-inline--fa fa-dice-two" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau1==3" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-three" class="svg-inline--fa fa-dice-three" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau1==4" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-four" class="svg-inline--fa fa-dice-four" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau1==5" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-five" class="svg-inline--fa fa-dice-five" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau1==6" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-six" class="svg-inline--fa fa-dice-six" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 288C110.4 288 96 273.6 96 256s14.38-32 32-32s32 14.38 32 32S145.6 288 128 288zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau2==1" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-one" class="svg-inline--fa fa-dice-one" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288z"></path></svg>
        <svg v-if="game.dau2==2" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-two" class="svg-inline--fa fa-dice-two" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau2==3" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-three" class="svg-inline--fa fa-dice-three" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384z"></path></svg>
        <svg v-if="game.dau2==4" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-four" class="svg-inline--fa fa-dice-four" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau2==5" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-five" class="svg-inline--fa fa-dice-five" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM224 288C206.4 288 192 273.6 192 256s14.38-32 32-32s32 14.38 32 32S241.6 288 224 288zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>
        <svg v-if="game.dau2==6" aria-hidden="true" height="50" width="50" focusable="" data-prefix="fas" data-icon="dice-six" class="svg-inline--fa fa-dice-six" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.62 32 0 60.62 0 96v320c0 35.38 28.62 64 64 64h320c35.38 0 64-28.62 64-64V96C448 60.62 419.4 32 384 32zM128 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S145.6 384 128 384zM128 288C110.4 288 96 273.6 96 256s14.38-32 32-32s32 14.38 32 32S145.6 288 128 288zM128 192C110.4 192 96 177.6 96 160s14.38-32 32-32s32 14.38 32 32S145.6 192 128 192zM320 384c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 384 320 384zM320 288c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 288 320 288zM320 192c-17.62 0-32-14.38-32-32s14.38-32 32-32s32 14.38 32 32S337.6 192 320 192z"></path></svg>

        <form @submit.prevent="crear()">
            <button type="submit" class="btn btn-primary">JUEGA!</button>
        </form>
        <span v-if="resultat">
        <h1 >Tu resultado es: {{this.resultat}}</h1>
        <h1 v-if="game.win" class="text-success">¡Has ganado!</h1>
        <h1 v-else  class="text-danger">¡Has perdido!</h1>
        </span>
    
    </div>

    
</template>

<script>
 
  export default {
     name:"crear-game",

    data(){
        return{
            game:{
                dau1:"1",
                dau2:"6",
                win:"",
                player_id: this.$route.params.id
            },
            resultat: "",
            playername: localStorage.playername,
            playerID:this.$route.params.id
        }
    },

    mounted(){

    },

    methods: {
      async crear(){
           axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
          this.tirardados();
        await this.axios.post('/api/players/'+this.playerID+'/games', this.game)
            .then(response=>{

            })
            .catch(error=>{console.log(error)})
        },

        tirardados() {
            this.game.dau1=Math.floor(Math.random()*(7-1)+1)
            this.game.dau2=Math.floor(Math.random()*(7-1)+1)
            this.resultat=this.game.dau1+this.game.dau2
            if(this.resultat>=7)this.game.win=true
            else this.game.win=false
        }
    }
 }
 </script>
 