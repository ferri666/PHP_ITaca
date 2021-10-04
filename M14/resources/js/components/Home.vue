<template>
<div class="container text-center">
    <form @submit.prevent="login()" class="form-signin">

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" v-model="data.email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" v-model="data.password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <p><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></p>
    </form>
</div>
</template>

<script>

export default{
  
  name:"home",

    data() {
        return{
            data:{
              email:"",
              password:""
            }
        }
    },
    methods:{
       async login(){
           await this.axios.post('/api/login', this.data)
                .then(response=>{
                     localStorage.token = response.data.token
                     this.$router.push({name:"mostrarShops"});
                     
                    })
                    .catch(error=>{
                        console.log(error)
                    })
        }
    }
} 
</script>
