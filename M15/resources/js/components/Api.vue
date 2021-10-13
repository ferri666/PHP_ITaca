<template>
<div role="main">
  <nav class="site-header bg-black sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <router-link class="nav-link active" :to='{name:"home"}'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
    </router-link>
     <h1 class="text text-white">Juego de Dados</h1>
          <router-link  class="nav-link" :to='{name:"login"}'>Login User</router-link>
          <router-link  class="nav-link" v-if="isAuthenticated" :to='{name:"crearPlayer"}'>Register Player</router-link>
          <a class="nav-link" href="#" v-if="isAuthenticated" v-on:click="logout">Sign out</a>
      </div>
    </nav>
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li v-if="isPlayer" class="nav-item">
                <router-link class="nav-link active" :to='{name:"crearGame", params:{id:playerID}}'>
                  <svg aria-hidden="true" width="36" height="36" focusable="false" data-prefix="fas" data-icon="dice" class="svg-inline--fa fa-dice" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M447.1 224c0-12.56-4.781-25.13-14.35-34.76l-174.9-174.9C249.1 4.786 236.5 0 223.1 0C211.4 0 198.9 4.786 189.2 14.35L14.35 189.2C4.783 198.9-.0011 211.4-.0011 223.1c0 12.56 4.785 25.17 14.35 34.8l174.9 174.9c9.625 9.562 22.19 14.35 34.75 14.35s25.13-4.783 34.75-14.35l174.9-174.9C443.2 249.1 447.1 236.6 447.1 224zM96 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1S120 210.8 120 224S109.3 248 96 248zM224 376c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S237.3 376 224 376zM224 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1S248 210.8 248 224S237.3 248 224 248zM224 120c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S237.3 120 224 120zM352 248c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S365.3 248 352 248zM591.1 192l-118.7 0c4.418 10.27 6.604 21.25 6.604 32.23c0 20.7-7.865 41.38-23.63 57.14l-136.2 136.2v46.37C320 490.5 341.5 512 368 512h223.1c26.5 0 47.1-21.5 47.1-47.1V240C639.1 213.5 618.5 192 591.1 192zM479.1 376c-13.25 0-23.1-10.75-23.1-23.1s10.75-23.1 23.1-23.1s23.1 10.75 23.1 23.1S493.2 376 479.1 376z"></path></svg>
                  <b>PLAY</b>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link active" :to='{name:"mostrarPlayers"}'>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Players
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link active" :to='{name:"ranking"}'>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Ranking
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link active" :to='{name:"winner"}'>
                  <svg aria-hidden="true" focusable="false"  width="24" height="24" data-prefix="fas" data-icon="trophy" class="svg-inline--fa fa-trophy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M572.1 82.38C569.5 71.59 559.8 64 548.7 64h-100.8c.2422-12.45 .1078-23.7-.1559-33.02C447.3 13.63 433.2 0 415.8 0H160.2C142.8 0 128.7 13.63 128.2 30.98C127.1 40.3 127.8 51.55 128.1 64H27.26C16.16 64 6.537 71.59 3.912 82.38C3.1 85.78-15.71 167.2 37.07 245.9c37.44 55.82 100.6 95.03 187.5 117.4c18.7 4.805 31.41 22.06 31.41 41.37C256 428.5 236.5 448 212.6 448H208c-26.51 0-47.99 21.49-47.99 48c0 8.836 7.163 16 15.1 16h223.1c8.836 0 15.1-7.164 15.1-16c0-26.51-21.48-48-47.99-48h-4.644c-23.86 0-43.36-19.5-43.36-43.35c0-19.31 12.71-36.57 31.41-41.37c86.96-22.34 150.1-61.55 187.5-117.4C591.7 167.2 572.9 85.78 572.1 82.38zM77.41 219.8C49.47 178.6 47.01 135.7 48.38 112h80.39c5.359 59.62 20.35 131.1 57.67 189.1C137.4 281.6 100.9 254.4 77.41 219.8zM498.6 219.8c-23.44 34.6-59.94 61.75-109 81.22C426.9 243.1 441.9 171.6 447.2 112h80.39C528.1 135.7 526.5 178.7 498.6 219.8z"></path></svg>
                  Winner
                </router-link>
              </li>
              <li class="nav-item">
                 <router-link class="nav-link active" :to='{name:"loser"}'>
                  <svg aria-hidden="true" focusable="false"  width="24" height="24" data-prefix="fas" data-icon="poo-storm" class="svg-inline--fa fa-poo-storm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M304 368H248.3l38.45-89.7c2.938-6.859 .7187-14.84-5.312-19.23c-6.096-4.422-14.35-4.031-19.94 .8906l-128 111.1c-5.033 4.391-6.783 11.44-4.439 17.67c2.346 6.25 8.314 10.38 14.97 10.38H199.7l-38.45 89.7c-2.938 6.859-.7187 14.84 5.312 19.23C169.4 510.1 172.7 512 175.1 512c3.781 0 7.531-1.328 10.53-3.953l128-111.1c5.033-4.391 6.783-11.44 4.439-17.67C316.6 372.1 310.7 368 304 368zM373.3 226.6C379.9 216.6 384 204.9 384 192c0-35.38-28.62-64-64-64h-5.875C317.8 118 320 107.3 320 96c0-53-43-96-96-96C218.9 0 213.9 .75 208.9 1.5C218.3 14.62 224 30.62 224 48C224 92.13 188.1 128 144 128H128C92.63 128 64 156.6 64 192c0 12.88 4.117 24.58 10.72 34.55C31.98 236.3 0 274.3 0 320c0 53.02 42.98 96 96 96h12.79c-4.033-4.414-7.543-9.318-9.711-15.1c-7.01-18.64-1.645-39.96 13.32-53.02l127.9-111.9C249.1 228.2 260.3 223.1 271.1 224c10.19 0 19.95 3.174 28.26 9.203c18.23 13.27 24.76 36.1 15.89 57.71l-19.33 45.1h7.195c19.89 0 37.95 12.51 44.92 31.11C355.3 384 351 402.8 339.1 416H352c53.02 0 96-42.98 96-96C448 274.3 416 236.3 373.3 226.6z"></path></svg>
                  Loser
                </router-link>
              </li>
             
              
              
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <router-view></router-view>
        </main>
    </div>
    </div>
</template>

<script>

export default {
  data() {
    return {
      isAuthenticated: false,
      isPlayer: false,
      playerID: 0,
    }
  },
  methods:{
    async logout() {
         axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
       await this.axios.post('/api/logout')
       .then(()=>[
         localStorage.removeItem('token'),
         localStorage.removeItem('username'),
          localStorage.removeItem('playername'),
          localStorage.removeItem('playerID'),
          this.isAuthenticated=false,
          this.isPlayer= false,
         this.$router.push({name:"home"})
       ]);
    }
  },

  watch: {
      $route() {
          if (localStorage.getItem('token')) this.isAuthenticated =true;
          else {
            this.isAuthenticated =false;
            this.$router.push({name:'login'});
          }

           if (localStorage.getItem('playerID')) {
             this.isPlayer =true;
              this.playerID = localStorage.playerID
           }
      }
  }
}
</script>
