<template>
    <div>
      <div class="d-flex justify-content-between">
        <h1 class="mt-3 mb-3">Déposer une recette</h1>
        <div class="d-flex justify-content-center align-items-center">
          <router-link to="/">revenir à l'accueil </router-link>
        </div>
        
      </div>
      <form v-on:submit.prevent="submitForm">
          <div class="form-group mb-2">
              <label for="name">Titre de la recette</label>
              <input type="text" class="form-control" id="name" placeholder="Titre de la recette" v-model="form.name">
          </div>
          <div class="form-group mb-2">
              <label for="name">Durée (min)</label>
              <input type="number" class="form-control" min="0" step="5" v-model="form.duration"/>
          </div>
          <div class="form-group mb-2">
              <label for="formControlRange">Difficulté</label><br />
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty-easy" value="facile"
                      v-model="form.difficulty">
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
              <textarea name="message" class="form-control" id="ingredients" placeholder="lait, beurre, farine..." rows="3"
                  v-model="form.ingredients"></textarea>
          </div>
          <div class="form-group">
              <button class="btn btn-primary">Déposer</button>
          </div>
      </form>
      <div class="message" >
        <p v-if="response">Votre recette à bien été ajoutée</p>
        <p v-if="err">Un problème est survenu lors de l'ajout de votre recette</p>
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
        }
    },
    methods:{
        submitForm(){
            axios.post('/post-recipes', this.form)
                 .then((res) => {
                     if(res.status == 200){
                       this.response = true;
                     }
                 })
                 .catch((error) => {
                     this.err = true;
                 });
        }
    }
}

</script>