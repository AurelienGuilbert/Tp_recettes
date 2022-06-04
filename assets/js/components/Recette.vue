<template>
<div class="container d-flex flex-column">
    <div class=" d-flex justify-content-between">
        <h1 class="mt-3 mb-3">{{recipe.name}}</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/recettes">revenir aux recettes </router-link>
        </div>
       
      </div>
      <div class=" p-3 mb-2">
            <div class="d-flex flex-column ">
                <h5 class="col-4">{{recipe.name}}</h5>
                <div class="col-4">Durée : {{recipe.duration}}</div>
                <div class="col-4">Difficulté : {{recipe.difficulty}}</div>
                <div>{{recipe.ingredients}}</div>
                
                <router-link :to="{ name: 'edit', params: { id: recipe.id }}">Modifier la recette</router-link>
            </div>
         
            
        </div>
</div>
</template>

<script>
import axios from "axios";

export default {
  name: "Recette",
  data: function () {
    return {
      recipe: '',
      url_id: null
    }
  },
  methods: {
    loadRecipe(event) {
        axios.get('/get-recipe/'+ this.url_id).then(response => {
          console.log(response.data);
          this.recipe = response.data;
        });
      }, 
  }, 
  
  beforeMount() {
   this.url_id = this.$route.params.id
    this.loadRecipe()
  
  } 
  
};
</script>