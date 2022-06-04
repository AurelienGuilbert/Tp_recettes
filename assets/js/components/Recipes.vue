<template>
    <div class="container">
      <div class="d-flex justify-content-between">
        <h1 class="mt-3 mb-3">Page recettes</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/">revenir à l'accueil </router-link>
        </div>
      </div>
        <input type="text" class='mb-3' placeholder="Chercher une recette..." v-model="searchValue">
        <div v-for="result in searchResult" v-bind:key="result.id" class="item d-flex p-3 mb-2">
            <div class="img d-flex justify-content-center pe-3 col-2">
              <img :src="image" alt="category_image">
            </div>
            <div class="d-flex justify-content-between col-10">
              <div class="d-flex flex-column justify-content-between "> 
                    <h5 class="">{{result.name}}</h5>
                    <div>Ingrédients : {{result.ingredients}}</div>
                          <div class="">Difficulté : {{result.difficulty}}</div>
                <div class="">Durée : {{result.duration}}</div>
              </div> 
              <div class="d-flex flex-column justify-content-around  p-3">
                <router-link :to="{ name: 'recette', params: { id: result.id }}"><button class="btn btn-primary">Voir la recette</button></router-link>
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
        axios.get("/get-recipes").then(response => {
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