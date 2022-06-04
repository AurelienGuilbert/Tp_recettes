<template>
    <div class="container">

      <!-- Title  -->
      <div class="d-flex justify-content-between">
        <h1 class="mt-3 mb-3">Page recettes</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/">revenir à l'accueil </router-link>
        </div>
      </div>

      <!-- Searchbar  -->
        <input type="text" class='mb-3' placeholder="Chercher une recette..." v-model="searchValue">

      <!-- Display Recipes  -->
      <div class="d-md-flex flex-wrap">
        <div v-for="result in searchResult" v-bind:key="result.id" class="item-container col-12 col-md-4  ">
          <div class="p-md-3">
            <div class="item-subcontainer">
              <img class="card-img-top" :src="image" alt="category_img">
              <div class="card-body">
              <h5 class="card-title">{{result.name}}</h5>
              <p class="card-text">Difficulté: {{result.difficulty}}</p>
              <p class="card-text">Durée: {{result.duration}}</p>
              <router-link :to="{ name: 'recette', params: { id: result.id }}"><button class="btn btn-primary">Voir la recette</button></router-link>
            </div>
          </div>
        </div>
             
        </div>
      </div>
    </div>
</template>

<script>
import axios from "axios";
import categoryImage from "../images/img.jpg"

export default {
  name: "RecettesComponent",
  data: function () {
    return {
      image: categoryImage,
      recipes: [],
      searchValue: ''
    }
  },
  methods: {
    loadRecipes(event) {
        axios.get("/get-recipes")
        .then(response => {
          this.recipes = response.data;
        })
        .catch((error) => {
          console.log(error);          
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
mounted: function(){
this.loadRecipes()
}
  
};
</script>