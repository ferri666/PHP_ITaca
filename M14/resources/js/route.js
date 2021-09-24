const Home =()=> import ('./components/Home.vue')
const CrearShop =()=> import('./components/shops/Crear.vue')
const MostrarShop =()=> import('./components/shops/Mostrar.vue')
const MostrarCuadres =()=> import('./components/pictures/Mostrar.vue')
const CrearCuadre =()=> import('./components/pictures/Crear.vue')



export const routes = [
    {
    name: 'home',
    path: '/',
    component:Home
},
{
    name: 'mostrarShops',
    path: '/shops',
    component:MostrarShop
},
{
    name: 'CrearShop',
    path: '/shops',
    component:CrearShop
},
{
    name: 'mostrarCuadres',
    path: '/shop/:id/pictures',
    component:MostrarCuadres
},
{
    name: 'crearCuadre',
    path: '/shop/:id/pictures',
    component:CrearCuadre
}
];