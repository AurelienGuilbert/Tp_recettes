<template>
    <div>
      <div class="d-flex justify-content-between">
        <h1 class="mt-3 mb-3">Modifier la recette : "{{recipe.name}}"</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/recettes">revenir aux recettes </router-link>
        </div>
      </div>
      <form v-on:submit.prevent="submitForm">
          <div class="form-group mb-2">
              <label for="name">Titre de la recette</label>
              <input type="text" class="form-control" id="name" :placeholder="recipe.name" v-model="form.name">
          </div>
          <div class="form-group mb-2">
              <label for="name">Durée (min)</label>
              <input type="number" class="form-control" min="0" step="5" v-model="form.duration"/>
          </div>
          <div class="form-group mb-2">
              <label for="formControlRange">Difficulté</label><br />
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty-easy" value="facile"
                      v-model="form.difficulty" >
                  <label class="form-check-label" for="difficulty">facile</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty-medium" value="medium"
                      v-model="form.difficulty">
                  <label class="form-check-label" for="difficulty">medium</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty-hard" value="difficile"
                      v-model="form.difficulty">
                  <label class="form-check-label" for="difficulty">difficile</label>
              </div>
          </div>
          <div class="form-group mb-2">
              <label for="message">Ingrédients</label>
              <textarea name="message" class="form-control" id="ingredients" :placeholder="recipe.ingredients" rows="3"
                  v-model="form.ingredients"></textarea>
          </div>
          <div class="form-group">
              <button class="btn btn-primary">Modifier</button>
          </div>
      </form>
      <div class="message mt-3" >
        <div v-if="response" class="alert alert-success" role="alert">
            Votre recette à bien été modifiée
        </div>
        <div v-if="err" class="alert alert-danger" role="alert">
            Un problème est survenu lors de la modification de votre recette
        </div>
      </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: 'PostFormAxios',
    data(){
        return{
            form: {
                name: '',
                duration: 0,
                difficulty: '',
                ingredients: ''
            },
            response : false,
            err : false,
            recipe: '',
            url_id: null, 
        }
    },
    methods:{
        submitForm(){
            axios.post('/edit-recipe/'+ this.url_id, this.form)
                 .then((res) => {
                     if(res.status == 200){
                       this.response = true;
                     }
                 })
                 .catch((error) => {
                     this.err = true;
                 });
        },
        loadRecipe(event) {
        axios.get('/get-recipe/'+ this.url_id).then(response => {
          this.recipe = response.data;

          // prefill form with data from server
          this.form.name = response.data.name
          this.form.duration = response.data.duration
          this.form.difficulty = response.data.difficulty
          this.form.ingredients = response.data.ingredients
        });
      }, 
    },
    beforeMount() {
    this.url_id = this.$route.params.id
    this.loadRecipe()
  },
}
</script>