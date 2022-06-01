<template>
    <div class="container">
        <h1>Page recettes</h1>
        <!-- <button v-on:click="loadRecipies">Charger les recettes</button> -->
        <!-- <ul id="recettesList">
          <li v-for="recette in recettesList" v-bind:key="recette.id" >{{ recette }}</li>
        </ul> -->
        <div v-for="recette in recettesList" v-bind:key="recette.id" class="item p-3 mb-2">
            <div class="d-flex justify-content-between">
                <h5 class="col-4">{{recette.name}}</h5>
                <div class="col-4">Difficulté : {{recette.difficulty}}</div>
            </div>
            <div class="d-flex justify-content-between">
                <div>{{recette.ingredients}}</div>
                <div class="col-4">Durée : {{recette.duration}}</div>
            </div>
        </div>
        
    </div>
</template>


<script>
import axios from "axios";

export default {
  name: "RecettesComponent",
  data: function () {
    return {
      recettesList: ['Aucun'],
    }
  },
  
  methods: {
      loadRecipies(event) {
        axios.get("/get-recipies").then(response => {
          
          console.log(response.data);
          this.recettesList = response.data;
        });
      }
  },
  beforeMount() {
        this.loadRecipies()
  } 
};

</script>