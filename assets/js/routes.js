import Vue from 'vue';
import VueRouter from 'vue-router';

// components
import Home from './components/Home';
import Recettes from './components/Recettes';
import Recette from './components/Recette';
import Create from './components/Create';
import Edit from './components/Edit';

// router
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes:[
    {path:'/', name:'home', component:Home},
    {path:'/recettes', name:'recettes', component:Recettes},
    {path:'/create', name:'create', component:Create},
    {path:'/recette/:id', name:'recette', component:Recette},
    {path:'/edit/:id', name:'edit', component:Edit},
  ]
});

export default router;