<template>
    <div class="container">
    <div class="row">
        <div class="col-12"> 
            <router-link :to='{name:"CrearShop"}' class="btn btn-success">Crear</router-link>
        </div>
    

        <div class="col-12">
            <div class="table-responsive">
                <table class="bg-primary text-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Localitat</th>
                            <th>Capacitat</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="shop in shops" :key="shop.id">
                            <td>{{ shop.id}}</td>
                            <td>{{ shop.name}}</td>
                            <td>{{ shop.location}}</td>
                            <td>{{ shop.capacity}}</td>
                            <td> <router-link :to='{name:"mostrarCuadres", params:{id: shop.id}}' class="btn btn-info">
                                <i class="fas fa-eye"></i>
                                </router-link></td>
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
    name:"shops",

    data() {
        return{
            shops:[]
        }
    },
    mounted(){
        this.mostrarShops()
    },
    methods:{
       async mostrarShops(){
           await this.axios.get('/api/shop')
                .then(response=>{
                    this.shops=response.data
                    })
                    .catch(error=>{
                        this.shops = []
                    })
        }
    }
} 
</script>
