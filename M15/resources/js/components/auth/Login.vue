<template>
    <form @submit.prevent="login()" class="form-signin col-7">

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" v-model="data.email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" v-model="data.password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <p><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></p>
    </form>
</template>

<script>

export default{
  
  name:"login",

    data() {
        return{
            data:{
              email:"",
              password:""
            }
        }
    },
    mounted(){
    },
    methods:{
       async login(){
           await this.axios.post('/api/login', this.data)
                .then(response=>{
                    localStorage.username = response.data.user.name
                     localStorage.token = response.data.token
                      localStorage.removeItem('playername'),
                      localStorage.removeItem('playerid'),
                     this.$router.push({name:"home"})
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
    }
} 
</script>