import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home';
import Hello from './components/Hello';
import Recettes from './components/Recettes';
import Create from './components/Create';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes:[
    {path:'/', name:'home', component:Home},
    {path:'/hello', name:'hello', component:Hello},
    {path:'/recettes', name:'recettes', component:Recettes},
    {path:'/create', name:'create', component:Create},
  ]
});

export default router;