<template>
	<div>

		<header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex">
          <li><router-link v-if="!isAuthenticated" exact-active-class="active" to="/" class="nav-link active" aria-current="page">
          Login
          </router-link></li>
          <li><router-link exact-active-class="active" to="/shops" class="nav-link active" aria-current="page">
          Botigues
          </router-link></li>
          <li><a v-if="isAuthenticated" exact-active-class="active" v-on:click="logout" class="nav-link active" aria-current="page">
          Logout
          </a></li>
        </div>
      </div>
    </header>
		
		<router-view></router-view>
	</div>
</template>

<script>

export default {
  data() {
    return {
      isAuthenticated: false,
    }
  },methods:{
    async logout() {
         axios.defaults.headers.common = {
               Authorization: "Bearer " +localStorage.getItem("token")
           };
       await this.axios.post('/api/logout')
       .then(()=>[
         localStorage.removeItem('token'),
         localStorage.removeItem('username'),
         this.$router.push({name:"home"})
       ]);
    }
  },

  watch: {
    $route() {
          if (localStorage.getItem('token')) this.isAuthenticated =true;
          else {
            this.isAuthenticated =false;
            this.$router.push({name:'home'});
          }
      }
  }


  
}
</script>

   