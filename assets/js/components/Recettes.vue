<template>
    <div class="container">
      <div class="d-flex justify-content-between">
        <h1 class="mt-3 mb-3">Page recettes</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/">revenir à l'accueil </router-link>
        </div>
      </div>
        <input type="text" class='mb-3' placeholder="Chercher une recette..." v-model="searchValue">
        <div v-for="recette in searchResult" v-bind:key="recette.id" class="item p-3 mb-2">
            <div class="d-flex justify-content-between">
                <h5 class="col-4">{{recette.name}}</h5>
                <div class="col-4">Difficulté : {{recette.difficulty}}</div>
                
            </div>
            <div class="d-flex justify-content-between">
                <div>{{recette.ingredients}}</div>
                <div class="col-4">Durée : {{recette.duration}}</div>
            </div>
            <router-link to="/edit">voir la recette</router-link>
        </div>
        
    
    </div>
</template>

<script>
import axios from "axios";
export default {
  name: "RecettesComponent",
  data: function () {
    return {
      recipes: [],
      searchValue: ''
    }
  },
  methods: {
    loadRecipes(event) {
        axios.get("/get-recipes").then(response => {
          
          console.log(response.data);
          this.recipes = response.data;
        });
      }, 
  }, 
  computed: {
  searchResult() {
  let tempRecipes = this.recipes
  
  if (this.searchValue != '' && this.searchValue) {
        tempRecipes = tempRecipes.filter((item) => {
          return item.name
            .toUpperCase()
            .includes(this.searchValue.toUpperCase())
        })
      }
    return tempRecipes
  }
},
  beforeMount() {
        this.loadRecipes()
  } 
};
</script>