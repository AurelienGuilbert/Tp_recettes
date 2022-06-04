<template>
  <div class="d-flex justify-content-center">
    <div class="w-50 container d-flex flex-column">
        <div class=" d-flex justify-content-between">
            <h1 class="mt-3 mb-3">{{recipe.name}}</h1>
            <div class="d-flex justify-content-center align-items-center">
              <router-link to="/recettes">back</router-link>
            </div>
        </div>
        <img :src="image" alt="category_image">
        <div class="pt-3 pb-3">
            <div class="d-flex flex-column ">
                <div>Durée : {{recipe.duration}}</div>
                <div>Difficulté : {{recipe.difficulty}}</div>
                <div>Ingrédients : {{recipe.ingredients}}</div>
                <router-link :to="{ name: 'edit', params: { id: recipe.id }}" class="mt-3"><button class="btn btn-danger">Modifier la recette</button></router-link>
            </div>  
        </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import categoryImage from "../images/img.jpg"

export default {
  name: "Recette",
  data: function () {
    return {
      recipe: '',
      url_id: null,
      image: categoryImage,
    }
  },
  methods: {
    loadRecipe(event) {
        axios.get('/get-recipe/'+ this.url_id).then(response => {
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