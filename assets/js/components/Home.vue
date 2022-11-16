<template>
    <div class='row'>
      <div class="text-center mt-5 mb-5">
         <h1>Bienvenue sur votre site de recettes.</h1>
      </div>
      <div class="text-center">
        <router-link to="/recettes"><button class="btn btn-primary me-2">Voir les recettes</button></router-link>
        <router-link to="/create"><button class="btn btn-secondary">Déposer une recette</button></router-link>
      </div>
    </div>
</template>

<script>
  export default {
    name: "Home"
  }
</script>

<style scoped>

</style>