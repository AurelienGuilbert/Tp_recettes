import Vue from 'vue';
import VueRouter from 'vue-router';

// components
import Home from './components/Home';
import Recipes from './components/Recipes';
import Recipe from './components/Recipe';
import Create from './components/Create';
import Edit from './components/Edit';

// router
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes:[
    {path:'/', name:'home', component:Home},
    {path:'/recettes', name:'recettes', component:Recipes},
    {path:'/create', name:'create', component:Create},
    {path:'/recette/:id', name:'recette', component:Recipe},
    {path:'/edit/:id', name:'edit', component:Edit},
  ]
});

export default router;