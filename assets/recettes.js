console.log('recettes.js');

import Vue from 'vue'

import RecettesComponent from './components/recettes'

new Vue({
    components: { RecettesComponent },
    template: "<RecettesComponent />"
}).$mount("#recettes");

