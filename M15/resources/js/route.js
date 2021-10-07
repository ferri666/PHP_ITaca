const Home =()=> import ('./components/Home.vue')
const CrearGame =()=> import('./components/games/Crear.vue')
const MostrarGame =()=> import('./components/games/Mostrar.vue')
const MostrarPlayer =()=> import('./components/players/Mostrar.vue')
const CrearPlayer =()=> import('./components/players/Crear.vue')
const EditarPlayer =()=> import('./components/players/Editar.vue')
const Login =()=> import('./components/auth/Login.vue')
const Ranking =()=> import('./components/players/Ranking.vue')
const Loser =()=> import('./components/players/Loser.vue')
const Winner =()=> import('./components/players/Winner.vue')

export const routes = [
    {
    name: 'home',
    path: '/',
    component:Home
},
{
    name: 'mostrarPlayers',
    path: '/players',
    component:MostrarPlayer
},
{
    name: 'crearPlayer',
    path: '/players',
    component:CrearPlayer
},
{
    name: 'editarPlayer',
    path: '/players/:id',
    component:EditarPlayer
},
{
    name: 'mostrarGames',
    path: '/players/:id/games',
    component:MostrarGame
},
{
    name: 'crearGame',
    path: '/players/:id/games',
    component:CrearGame
},{
    name: 'login',
    path: '/login',
    component:Login
},{
    name: 'ranking',
    path: '/players/ranking',
    component:Ranking
},{
    name: 'loser',
    path: '/players/loser',
    component:Loser
},{
    name: 'winner',
    path: '/players/winner',
    component:Winner
}
];