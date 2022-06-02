<template>
    <div class='row'>
        <h1>Bienvenue sur votre site de recettes</h1>
        <router-link to="/recettes">Voir les recettes</router-link>
        <router-link to="/create">Déposer une recette</router-link>
    </div>
</template>

<script>
  export default {
    name: "Home"
  }
</script>

<style scoped>

</style>