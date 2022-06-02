<template>
    <div class="container">
        <h1 class="mt-3 mb-3">Recette</h1>
        {{recipe}}
    </div>
</template>

<script>
import axios from "axios";
let path = window.location.pathname;
    console.log(path);
export default {
  name: "displayRecette",
  data: function () {
    return {
      recipe: 'test',
    }
  },
  methods: {
    loadRecipe(event) {
        axios.get("/get-recipe/46").then(response => {
          
          console.log(response.data);
          this.recipe = response.data;
        });
      }, 
  }, 
  beforeMount() {
   
  this.loadRecipe()
  } 
  
};
</script>